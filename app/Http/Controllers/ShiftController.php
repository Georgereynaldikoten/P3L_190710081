<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function index()
    {
        return view('shift.index');
    }

    public function create()
    {
        return view('shift.create');
    }
}
