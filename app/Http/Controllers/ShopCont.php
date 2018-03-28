<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Kshop;

class ShopCont extends Controller
{
    public function index()
    {
    	return view('admin.shop.Tmarket');
    }

    public function tampil()
    {
    	$kategoris = Kshop::all();
    	return view('admin.shop.Tmarket',compact('kategoris'));
    }

    public function tambah(Request $request)
    {
    	$foto = $request->file('foto');
    	$namaF = time().'.'.$foto->getClientOriginalExtension();
    	$tempat = public_path('storage/shop'); 
    	$tatus = $foto->move($tempat,$namaF);

    	$tambah = Shop::create([
    		'nama_ikan' => $request->input('nama_ikan'),
    		'kategori_id' => $request->input('kategori_ikan'),
    		'harga' => $request->input('harga').'/'.$request->input('harga1'),
    		'ukuran' => $request->input('ukuran_ikan'),
    		'stok' => $request->input('stok'),
    		'foto' => $namaF,
    		'keterangan' => $request->input('keterangan'),
    	]);

    	$tambah->save();

    	return redirect('admin/shop/tambah');
    }
}
