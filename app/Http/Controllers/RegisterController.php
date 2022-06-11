<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|email:dns',
            'password' => 'required',
            'level' => 'required',
        ]);

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        User::create($input);
        
        if ($user) {
            return redirect()->intended('login');
        }
    }
}
