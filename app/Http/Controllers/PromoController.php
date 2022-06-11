<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Promo;


class PromoController extends Controller
{
   public function show ($id)
    {
        $promos = Promo::find($id);
        return view('promos.show', compact('promos'));
    }

    public function index()
    {
        $promos = Promo::orderBy('id', 'ASC')->get();
        return view('promos.index', compact('promos'));
    }
    public function create()
    {
        return view('promos.create');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $promos = Promo::where('promo_name', 'like', '%'.$search.'%')->get();
        return view('promos.index', compact('promos'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'promo_code' => 'required',
            'promo_type' => 'required',
            'promo_status' => 'required',
            'promo_description' => 'required',
            'discount_percent' => 'required',
        ]);

        $promo = new Promo;
        $promo->promo_code = $request->promo_code;
        $promo->promo_type = $request->promo_type;
        $promo->promo_status = $request->promo_status;
        $promo->promo_description = $request->promo_description;
        $promo->discount_percent = $request->discount_percent;
        $promo->save();
        if($promo){
            return redirect()
            ->route('promos.index')
            ->with('success', 'Data Promo berhasil ditambahkan');
        }else{
            return redirect()
            ->route('promos.index')
            ->with('error', 'Data Promo gagal ditambahkan');
        }

    }
    public function edit($id)
    {
        $promos = Promo::find($id);
        return view('promos.edit', compact('promos'));
    }
   
    public function update(Request $request, $id)
    {
        $request->validate([
            'promo_code' => 'required',
            'promo_type' => 'required',
            'promo_status' => 'required',
            'promo_description' => 'required',
            'discount_percent' => 'required',
        ]);

        $promo = Promo::find($id);
        $promo->promo_code = $request->promo_code;
        $promo->promo_type = $request->promo_type;
        $promo->promo_status = $request->promo_status;
        $promo->promo_description = $request->promo_description;
        $promo->discount_percent = $request->discount_percent;
        $promo->save();
        if($promo){
            return redirect()
            ->route('promos.index')
            ->with('success', 'Data Promo berhasil diubah');
        }else{
            return redirect()
            ->route('promos.index')
            ->with('error', 'Data Promo gagal diubah');
        }
    }
    public function destroy($id)
    {
        $promo = Promo::find($id);
        $promo->delete();
        return redirect()->route('promos.index')->with('success', 'Data Promo berhasil dihapus');
    }

}
