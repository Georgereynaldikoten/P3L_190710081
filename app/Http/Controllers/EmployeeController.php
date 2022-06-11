<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use Session;
use Hash;

class EmployeeController extends Controller
{
    
    public function index()
    {
        $employees = Employee::OrderBy('id', 'ASC')->get();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }
    
    
    
    public function store(Request $request)
    {
        // dd(request()->all());
       
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'employee_address' => 'required',
            'employee_phone_number' => 'required',
            'email' => 'required|email|unique:users',
            'employee_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role' => 'required',
            'employee_birth_date' => 'required',
            'employee_gender' => 'required',

        ]);
        $filename= time().'_'.$request->employee_image->getClientOriginalName();
        if($request->role == "admin"){
            $rolename = '3'; 
        }else if($request->role == "cs"){
            $rolename = '2';
        }else if($request->role == "manager"){
            $rolename = '1';
        }
        
        
        $user = new User;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->level = $request->role;
        $user->save();

        //dd($user->id);
        $employee = new Employee;
        $employee->id_user = $user->id;
        $employee->id_role = $rolename;
        $employee->employee_name = $request->name;
        $employee->employee_address = $request->employee_address;
        $employee->employee_birth_date = $request->employee_birth_date;
        $employee->employee_gender = $request->employee_gender;
        $employee->employee_phone_number = $request->employee_phone_number;
        $employee->employee_image = $filename;
        $employee->save();
        $request->employee_image->storeAs('public/profil_employees', $filename);
        return redirect()->route('employees.index')->with('success', 'Data berhasil ditambahkan');
    }
   
   
   
    public function show($id)
    {
        $employees = Employee::find($id);
        return view('employees.show', compact('employees'));
    }
   
   
    public function edit($id)
    {
        $employees = Employee::find($id);
        return view('employees.edit', compact('employees'));
    }

   
   
    public function update(Request $request, $id)
    {
         //dd($request->all());
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'employee_address' => 'required',
            'employee_phone_number' => 'required',
            'email' => 'required|email',
            'employee_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_role' => 'required',
            'employee_birth_date' => 'required',
            'employee_gender' => 'required',

        ]);
       
        $employee = Employee::find($id);

        // If Picture have same Name
        // GetNewFileName
        $filename= time().'_'.$request->employee_image->getClientOriginalName();
        $findpicturename = $employee->employee_image;
        
         if($filename != $findpicturename){
            $request->employee_image->storeAs('public/profil_employees', $filename);
            storage::delete('public/profil_employees/'.$findpicturename);
        }else{
            $filename = $findpicturename;
        }
       
       if($request->id_role == "admin"){
        $rolename = '3'; 
         }else if($request->id_role == "cs"){
        $rolename = '2';
         }else if($request->id_role == "manager"){
        $rolename = '1';
         }
        
        
        $user = User::find($employee->id_user);
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->level = $request->id_role;
        $user->save();

        $employee->id_user = $user->id;
        $employee->id_role = $rolename;
        $employee->employee_name = $request->name;
        $employee->employee_address = $request->employee_address;
        $employee->employee_birth_date = $request->employee_birth_date;
        $employee->employee_gender = $request->employee_gender;
        $employee->employee_phone_number = $request->employee_phone_number;
        $employee->employee_image =  $filename;     
        $employee->save();

        if($employee){
        return redirect()->route('employees.index')->with('success', 'Data berhasil diubah');    
        }else{
            return redirect()->route('employees.index')->with('error', 'Data gagal diubah');
        }
    }
   
   
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $user = User::find($employee->id_user);
        $hapusfoto = $employee->employee_image;
        if($hapusfoto != null){
            Storage::delete('public/profil_employees/'.$hapusfoto);
        }
        $user->delete();
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Data berhasil dihapus');
    }

}

?>