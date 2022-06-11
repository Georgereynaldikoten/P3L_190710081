<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Mitra;
use App\Models\Car;

class MitraController extends Controller
{
    public function index()
    {
        $mitras = Mitra::OrderBy('id', 'ASC')->get();
        return view('mitras.index', compact('mitras'));
    }
    public function create()
    {
        return view('mitras.create');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $mitras = Mitra::where('mitra_name', 'like', '%' . $search . '%')->paginate(5);
        return view('mitras.index', compact('mitras'));
    }
    public function store(Request $request)
    {
       
        $request->validate([
            'mitra_name' => 'required',
            'mitra_address' => 'required',
            'mitra_phone' => 'required',
            'mitra_identity_number' => 'required',
            'mitra_car_id' => 'required',
        ]);
        
        $carname = Car::where('id', $request->mitra_car_id)->first();
        $getname = $carname->car_name;

        $mitra = new Mitra;
        $mitra->mitra_name = $request->mitra_name;
        $mitra->mitra_asset = $getname;
        $mitra->mitra_address = $request->mitra_address;
        $mitra->mitra_phone_number = $request->mitra_phone;
        $mitra->mitra_identity_number = $request->mitra_identity_number;
        $mitra->save();
        $mitraid = $mitra->id;
        //dd($mitraid);
        $car = Car::find($request->mitra_car_id);
        $car->car_asset_category = "Mitra";
        $car->id_mitra = $mitra->id;
        $car->save();
        
        if($mitra){
            return redirect()
            ->route('mitras.index')
            ->with('success', 'Data Mitra berhasil ditambahkan');
        }else{
            return redirect()
            ->route('mitras.index')
            ->with('error', 'Data Mitra gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $mitras = Mitra::find($id);
        return view('mitras.edit', compact('mitras'));
    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'mitra_name' => 'required',
            'mitra_address' => 'required',
            'mitra_phone_number' => 'required',
            'mitra_identity_number' => 'required',
            'mitra_car_id' => 'required',
        ]);
        $mitra = Mitra::find($id);
        $carname = Car::where('id', $request->mitra_car_id)->first();
        $getname = $carname->car_name;
        
        $finddatamobilold = Car::where('id_mitra', $id)->first();
        //dd($finddatamobilold);
        $finddatamobilold->car_asset_category = "Perusahaan";
        $finddatamobilold->id_mitra = null;
        $finddatamobilold->save();

        $mitra->mitra_name = $request->mitra_name;
        $mitra->mitra_address = $request->mitra_address;
        $mitra->mitra_phone_number = $request->mitra_phone_number;
        $mitra->mitra_identity_number = $request->mitra_identity_number;
        $mitra->mitra_asset = $getname;
        $mitra->save();

        $mitraid = $mitra->id;
        $car = Car::find($request->mitra_car_id);
        //dd($car);
        $car->car_asset_category = "Mitra";
        $car->id_mitra = $mitra->id;
        $car->save();
        if($mitra){
            return redirect()
                ->route('mitras.index')
                ->with('success', 'Data berhasil diubah');
        }else{
            return redirect()
                ->route('mitras.index')
                ->with('error', 'Data gagal diubah');
        }
    }
    public function show($id)
    {
        $mitras = Mitra::find($id);
        return view('mitras.show', compact('mitras'));
    }

    public function destroy($id)
    {
        $cars = Car::where('id_mitra', $id)->get();
        foreach($cars as $car){
            $car->car_asset_category = "";
            $car->id_mitra = null;
            $car->save();
        }
        $mitras = Mitra::find($id);
        $mitras->delete();
        if($mitras){
            return redirect()
                ->route('mitras.index')
                ->with('success', 'Data berhasil dihapus');
        }else{
            return redirect()
                ->route('mitras.index')
                ->with('error', 'Data gagal dihapus');
        }
    }
}
?>