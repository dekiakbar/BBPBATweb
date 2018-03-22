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

    public function cari(Request $request)
    {
    	$bukus = Perpus::with('kategori')
    				->where('judul_buku','LIKE','%'.$request->input('cari').'%')
    				->orWhere('pengarang','LIKE','%'.$request->input('cari').'%')
    				->orWhere('tahun_terbit','LIKE','%'.$request->input('cari').'%')
    				->paginate(10);
    	$kategoris = kategoriPerpus::all();

    	return view('perpus.index',compact('bukus','kategoris'))->with('no',($request->input('page',1)-1)*10);
    }

    public function kategori()
    {
    	$bukus = Perpus::join('kategoriPerpus','perpus.kategoriPerpus_id','kategoriPerpus.id')
    					->select('*','')
    }
}
