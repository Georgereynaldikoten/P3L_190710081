<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Driver;
use App\Models\User;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::OrderBy('id', 'ASC')->get();
        $users = User::OrderBy('id', 'ASC')->get();
        return view('drivers.index', compact('drivers','users'));
    }

    public function create()
    {
        return view('drivers.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $drivers = Driver::where('driver_name', 'like', '%' . $search . '%')->paginate(5);
        return view('drivers.index', compact('drivers'));
    }
    public function show ($id)
    {
        $drivers = Driver::find($id);
        return view('drivers.show', compact('drivers'));
    }

   
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6',
            'level' => 'required',
            'driver_address' => 'required',
            'driver_birth_date' => 'required',
            'driver_gender' => 'required',
            'driver_phone_number' => 'required',
            'driver_language' => 'required',
            'driver_profile_picture' => 'required',
            'driver_license' => 'required',
            'napsah_letter' => 'required',
            'soul_healthy_letter' => 'required',
            'physical_healthy_letter' => 'required',
            'skck_letter' => 'required',
            'available_status' => 'required',

        ]);
        //dd($request->all());
        $filename = time().'_'.$request->driver_profile_picture->getClientOriginalName();
        $filename1 = time().'_'.$request->driver_license->getClientOriginalName();
        $filename2 = time().'_'.$request->napsah_letter->getClientOriginalName();
        $filename3 = time().'_'.$request->soul_healthy_letter->getClientOriginalName();
        $filename4 = time().'_'.$request->physical_healthy_letter->getClientOriginalName();
        $filename5 = time().'_'.$request->skck_letter->getClientOriginalName();
               
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->save();
        
        $userid = $user->id;
        $driver = new Driver;
        $driver->id_user = $user->id;
        $driver->driver_name = $request->name;
        $driver->driver_address = $request->driver_address;
        $driver->driver_birth_date = $request->driver_birth_date;
        $driver->driver_gender = $request->driver_gender;
        $driver->driver_phone_number = $request->driver_phone_number;
        $driver->driver_language = $request->driver_language;
        $driver->driver_profile_picture = $filename;
        $driver->driver_license = $filename1;
        $driver->napsah_letter = $filename2;
        $driver->soul_healthy_letter = $filename3;
        $driver->physical_healthy_letter = $filename4;
        $driver->skck_letter = $filename5;
        $driver->available_status = $request->available_status;
        $driver->save();


         //profile picture
         $request->file('driver_profile_picture')->storeAs('public/driver_profile_picture', $filename);
         // DriverLicense
         $request->driver_license->storeAs('public/driver_license', $filename1);
         // NapsahLetter
         $request->napsah_letter->storeAs('public/napsah_letter', $filename2);
         // SoulHealthyLetter
         $request->soul_healthy_letter->storeAs('public/soul_healthy_letter', $filename3);
         // PhysicalHealthyLetter
         $request->physical_healthy_letter->storeAs('public/physical_healthy_letter', $filename4);
         // SKCKLetter
         $request->skck_letter->storeAs('public/skck_letter', $filename5);
         //dd($request->all());

        if($driver){
            return redirect()
            ->route('drivers.index')
            ->with('success', 'Data Driver berhasil ditambahkan');
        }else{
            return redirect()
            ->route('drivers.index')
            ->with('error', 'Data Driver gagal ditambahkan');
        }
    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
            'level' => 'required',
            'driver_address' => 'required',
            'driver_birth_date' => 'required',
            'driver_gender' => 'required',
            'driver_phone_number' => 'required',
            'driver_language' => 'required',
            'driver_profile_picture' => 'required',
            'driver_license' => 'required',
            'napsah_letter' => 'required',
            'soul_healthy_letter' => 'required',
            'physical_healthy_letter' => 'required',
            'skck_letter' => 'required',
            'available_status' => 'required',
        ]);
        $findid = Driver::find($id);
        $filename = time().'_'.$request->driver_profile_picture->getClientOriginalName();
        $filename1 = time().'_'.$request->driver_license->getClientOriginalName();
        $filename2 = time().'_'.$request->napsah_letter->getClientOriginalName();
        $filename3 = time().'_'.$request->soul_healthy_letter->getClientOriginalName();
        $filename4 = time().'_'.$request->physical_healthy_letter->getClientOriginalName();
        $filename5 = time().'_'.$request->skck_letter->getClientOriginalName();
        
        $findpicturename= $findid->driver_profile_picture;
        $findlicensename= $findid->driver_license;
        $findnapsahname= $findid->napsah_letter;
        $findsoulname= $findid->soul_healthy_letter;
        $findphysicalname= $findid->physical_healthy_letter;
        $findskckname= $findid->skck_letter;

        if($findpicturename != $filename){
            $request->file('driver_profile_picture')->storeAs('public/driver_profile_picture', $filename);
            Storage::delete('public/driver_profile_picture/'.$findpicturename);
        }else{
            $filename = $findpicturename;
        }
        if($findlicensename != $filename1){
            $request->driver_license->storeAs('public/driver_license', $filename1);
            Storage::delete('public/driver_license/'.$findlicensename);
        }else{
            $filename1 = $findlicensename;
        }
        if($findnapsahname != $filename2){
            $request->napsah_letter->storeAs('public/napsah_letter', $filename2);
            Storage::delete('public/napsah_letter/'.$findnapsahname);
        }else{
            $filename2 = $findnapsahname;
        }
        if($findsoulname != $filename3){
            $request->soul_healthy_letter->storeAs('public/soul_healthy_letter', $filename3);
            Storage::delete('public/soul_healthy_letter/'.$findsoulname);
        }else{
            $filename3 = $findsoulname;
        }
        if($findphysicalname != $filename4){
            $request->physical_healthy_letter->storeAs('public/physical_healthy_letter', $filename4);
            Storage::delete('public/physical_healthy_letter/'.$findphysicalname);
        }else{
            $filename4 = $findphysicalname;
        }
        if($findskckname != $filename5){
            $request->skck_letter->storeAs('public/skck_letter', $filename5);
            Storage::delete('public/skck_letter/'.$findskckname);
        }else{
            $filename5 = $findskckname;
        }
        
        $user = User::find($findid->id_user);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->save();
        $driver = Driver::find($id);
        $driver->id_user = $user->id;
        $driver->driver_name = $request->name;
        $driver->driver_address = $request->driver_address;
        $driver->driver_birth_date = $request->driver_birth_date;
        $driver->driver_gender = $request->driver_gender;
        $driver->driver_phone_number = $request->driver_phone_number;
        $driver->driver_language = $request->driver_language;
        $driver->driver_profile_picture = $filename;
        $driver->driver_license = $filename1;
        $driver->napsah_letter = $filename2;
        $driver->soul_healthy_letter = $filename3;
        $driver->physical_healthy_letter = $filename4;
        $driver->skck_letter = $filename5;
        $driver->available_status = $request->available_status;
        $driver->save();
        if($driver){
            return redirect()
            ->route('drivers.index')
            ->with('success', 'Data Driver berhasil diubah');
        }else{
            return redirect()
            ->route('drivers.index')
            ->with('error', 'Data Driver gagal diubah');
        }
    }


        public function edit($id)
        {
            $drivers = Driver::find($id);
            return view('drivers.edit', compact('drivers'));
        }

   

    public function destroy($id)
    {
        $drivers = Driver::find($id);
        $users = User::find($drivers->id_user);
       

        $hapussim=$drivers->driver_license;
        $hapusnapsah=$drivers->napsah_letter;
        $hapussoul=$drivers->soul_healthy_letter;
        $hapusphysical=$drivers->physical_healthy_letter;
        $hapusskck=$drivers->skck_letter;
        $hapusprofile=$drivers->driver_profile_picture;

        // $alldrivers = Driver::all();
        // $getallname = $alldrivers->pluck('driver_license');
       
        Storage::delete('public/driver_license/'.$hapussim);
        Storage::delete('public/napsah_letter/'.$hapusnapsah);
        Storage::delete('public/soul_healthy_letter/'.$hapussoul);
        Storage::delete('public/physical_healthy_letter/'.$hapusphysical);
        Storage::delete('public/skck_letter/'.$hapusskck);
        Storage::delete('public/driver_profile_picture/'.$hapusprofile);
        $drivers->delete();
        $users->delete();
        return redirect()->route('drivers.index')->with('success', 'Data Driver berhasil dihapus');
    }
    
}
?>
