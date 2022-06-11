<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class UserController extends Controller
{
     public function index()
    {
       $users = User::orderBy('id', 'ASC')->get();
         return view('users.index', compact('users'));
    }

    public function indexadmin()
    {
         return view('home.dashboardadmin');
    }

    public function indexmanager()
    {
         return view('home.dashboardmanager');
    }

    public function indexcs()
    {
         return view('home.dashboardcs');
    }
    
    public function indexcustomer()
    {
         $cars = Car::OrderBy('id', 'ASC')->get();
        return view('home.dashboardcustomer', compact('cars'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'level' => 'required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->save();
        auth()->login($user);
        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
    }




























}
