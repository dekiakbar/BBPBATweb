<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoriPerpus;
use App\Perpus;
class WebPerpusCont extends Controller
{
    public function tampil(Request $request)
    {
    	$kategoris = kategoriPerpus::all();
    	$bukus = Perpus::with('kategori')->paginate(10);
    	return view('perpus.index',compact('bukus','kategoris'))->with('no',($request->input('page',1)-1)*10); 
    }
}
