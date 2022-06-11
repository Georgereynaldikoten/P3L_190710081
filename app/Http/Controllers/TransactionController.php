<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Driver;
use App\Models\Car;
use App\Models\Promo;


class TransactionController extends Controller
{
    public function index()
    {
        return view('transactions.index');
    }
    
    public function show($id)
    {
       $cars = Car::find($id);
        $drivers = Driver::OrderBy('id', 'ASC')->get();
        $promos = Promo::OrderBy('id', 'ASC')->get();
        return view('transactions.create', compact('cars', 'drivers', 'promos'));
    }
    
    

    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            
        ]);

        $transaction = new Transaction;
        $transaction->car_id = $request->car_id;
        $transaction->user_id = $request->user_id;
        $transaction->transaction_start_date = $request->transaction_start_date;
        $transaction->transaction_end_date = $request->transaction_end_date;
        $transaction->transaction_total_price = $request->transaction_total_price;
        $transaction->transaction_status = $request->transaction_status;
        $transaction->save();

        return redirect('/transactions')->with('success', 'Data berhasil ditambahkan');
    }
    
}
