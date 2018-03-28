<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kshop;
class KshopCont extends Controller
{
    public function index()
    {
        return view('admin.shop.Tmarket');
    }

    public function KStampil()
    {
        return view('admin.shop.Tmarket');
    }

    public function KStambah(Request $request)
    {
    	$tambah = Kshop::create([
    		'nama_kategori' => $request->input('nama_kategori')
    	]);

    	$tambah->save();
    	return redirect('admin/shop/kategori/tambah');
    }

    public function KShapus($id)
    {
    	$hapus = Ksop::findOrFail($id);
    	$hapus->delete();
    }
}
