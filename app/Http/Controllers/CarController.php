<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Car;
use App\Models\Mitra;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::OrderBy('id', 'ASC')->get();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $cars = Car::where('car_name', 'like', '%' . $search . '%')->paginate(5);
        return view('cars.index', compact('cars'));
    }
        
    // Get days between two date
    public function getDays()
    {
        $startDate = strtotime($startDate);
        $endDate = strtotime($endDate);
        $days = ($endDate - $startDate) / (60 * 60 * 24);
        return $days;
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_name' => 'required',
            'car_type' => 'required',
            'car_transmisi' => 'required',
            'car_fuel' => 'required',
            'car_color' => 'required',
            'car_trunk_volume' => 'required',
            'car_facilities' => 'required',
            'car_rent_price' => 'required',
            'car_asset_category' => 'required',
            'no_plat_car' => 'required',
            'car_fuel_volume' => 'required',
           
            'car_date_service' => 'required',
            'car_registration_number' => 'required',
            'car_image' => 'required',
        ]);

        //dd($request->all());
        $filename = $request->car_image->getClientOriginalName();
        $request->car_image->storeAs('public/car', $filename);
        // $carimage = $request->car_image->store('public/car');
        // $request->car_image = basename($carimage);
        //dd($filename);
        $car = new Car;
        $car->car_name = $request->car_name;
        $car->car_type = $request->car_type;
        $car->car_transmisi = $request->car_transmisi;
        $car->car_fuel = $request->car_fuel;
        $car->car_color = $request->car_color;
        $car->car_trunk_volume = $request->car_trunk_volume;
        $car->car_facilities = $request->car_facilities;
        $car->car_rent_price = $request->car_rent_price;
        $car->car_asset_category = $request->car_asset_category;
        $car->no_plat_car = $request->no_plat_car;
        $car->car_fuel_volume = $request->car_fuel_volume;
        $car->car_contract_start = $request->car_contract_start;
        $car->car_contract_end = $request->car_contract_end;
        $car->car_date_service = $request->car_date_service;
        $car->car_registration_number = $request->car_registration_number;
        $car->car_image = $filename;
        $car->save();
        if($car){
            return redirect()
            ->route('cars.index')
            ->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect()
            ->route('cars.index')
            ->with('error', 'Data gagal ditambahkan');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'car_name' => 'required',
            'car_type' => 'required',
            'car_transmisi' => 'required',
            'car_fuel' => 'required',
            'car_color' => 'required',
            'car_trunk_volume' => 'required',
            'car_facilities' => 'required',
            'car_rent_price' => 'required',
            'car_asset_category' => 'required',
            'no_plat_car' => 'required',
            'car_fuel_volume' => 'required',
            'car_contract_start' => 'required',
            'car_contract_end' => 'required',
            'car_date_service' => 'required',
            'car_registration_number' => 'required',
            'car_image' => 'required',
        ]);
        
        
        $filename = $request->car_image->getClientOriginalName();
        $carigambar=Car::find($id);
        $carinamagambar=$carigambar->car_image;
        if($carinamagambar!=$filename){
            $request->car_image->storeAs('public/car', $filename);
        }else{
            $filename=$carinamagambar;
             }
        //dd($carinamagambar);
        $car = Car::find($id);
        $car->car_name = $request->car_name;
        $car->car_type = $request->car_type;
        $car->car_transmisi = $request->car_transmisi;
        $car->car_fuel = $request->car_fuel;
        $car->car_color = $request->car_color;
        $car->car_trunk_volume = $request->car_trunk_volume;
        $car->car_facilities = $request->car_facilities;
        $car->car_rent_price = $request->car_rent_price;
        $car->car_asset_category = $request->car_asset_category;
        $car->no_plat_car = $request->no_plat_car;
        $car->car_fuel_volume = $request->car_fuel_volume;
        $car->car_contract_start = $request->car_contract_start;
        $car->car_contract_end = $request->car_contract_end;
        $car->car_date_service = $request->car_date_service;
        $car->car_registration_number = $request->car_registration_number;
        $car->car_image = $filename;
        $car->save();
        
        if($car){
            return redirect()
            ->route('cars.index')
            ->with('success', 'Data berhasil diubah');
        }else{
            return redirect()
            ->route('cars.index')
            ->with('error', 'Data gagal diubah');
        }
    }
    
    
    
        public function show($id)
    {
        $cars = Car::find($id);
        return view('cars.show', compact('cars'));
    }

    public function edit($id)
    {
        $cars = Car::find($id);
        $mitrafind = $cars->id_mitra;
        $mitras = Mitra::find($mitrafind);
       
        if($mitrafind != null){
            return view('cars.edit', compact('cars', 'mitras'));
        }else{
        return view('cars.edit', compact('cars'));
        }
    }

    public function destroy($id)
    {
        $cars = Car::findOrFail($id);
        $hapusgambar=$cars->car_image;
        //dd($hapusgambar);
        Storage::delete('public/car/'.$cars->car_image);
        $cars->delete();
        return redirect()
        ->route('cars.index')
        ->with('success', 'Data berhasil dihapus');
    }

}
?>
