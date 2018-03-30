<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kshop;
class KshopCont extends Controller
{
    public function index(Request $request)
    {
        $datas = Kshop::paginate(10);
        return view('admin.shop.IndexKategori',compact('datas'))->with('no',($request->input('page',1)-1)*10);
    }

    public function KStampil()
    {
        $kategoris = Kshop::all();
        return view('admin.shop.Tmarket',compact('kategoris'));
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
    	$hapus = Kshop::where('id',$id)->firstOrFail();
    	$hapus->delete();
    }
}
