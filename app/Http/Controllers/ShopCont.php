<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Kshop;

class ShopCont extends Controller
{
    public function index()
    {
        $datas = Shop::paginate(10);
    	return view('admin.shop.Index', compact('datas'));
    }

    public function tampil()
    {
    	$kategoris = Kshop::all();
    	return view('admin.shop.Tmarket',compact('kategoris'));
    }

    public function tambah(Request $request)
    {
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaF = time().'.'.$foto->getClientOriginalExtension();
            $tempat = public_path('storage/shop'); 
            $tatus = $foto->move($tempat,$namaF);

            $tambah = Shop::create([
                'nama_ikan' => $request->input('nama_ikan'),
                'kategori_id' => $request->input('kategori_ikan'),
                'slug' => $request->input('slug'),
                'harga' => $request->input('harga').'/'.$request->input('harga1'),
                'ukuran' => $request->input('ukuran_ikan'),
                'stok' => $request->input('stok'),
                'foto' => $namaF,
                'keterangan' => $request->input('keterangan'),
            ]);
        }else{
            $tambah = Shop::create([
                'nama_ikan' => $request->input('nama_ikan'),
                'kategori_id' => $request->input('kategori_ikan'),
                'slug' => $request->input('slug'),
                'harga' => $request->input('harga').'/'.$request->input('harga1'),
                'ukuran' => $request->input('ukuran_ikan'),
                'stok' => $request->input('stok'),
                'keterangan' => $request->input('keterangan'),
            ]);
        }
    	
    	$tambah->save();

    	return redirect('admin/shop/tambah');
    }

    public function edit($slug)
    {
        $edit = Shop::with('kategori')->where('slug',$slug)->firstOrFail();
        $kategoris = Kshop::all();
        return view('admin.shop.Emarket',compact('edit','kategoris'));
    }

    public function simpan(Request $request,$slug)
    {
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaF = time().'.'.$foto->getClientOriginalExtension();
            $tempat = public_path('storage/shop'); 
            $tatus = $foto->move($tempat,$namaF);

            $update = Shop::with('kategori')->where('slug',$slug)->firstOrFail();
            $update->nama_ikan = $request->input('nama_ikan');
            $update->kategori_id = $request->input('kategori_ikan');
            $update->slug = $request->input('slug');
            $update->harga = $request->input('harga');
            $update->ukuran = $request->input('ukuran_ikan');
            $update->stok = $request->input('stok');
            $update->foto = $namaF;
            $update->keterangan = $request->input('keterangan');

            $update->save();
        }else{

            $update = Shop::with('kategori')->where('slug',$slug)->firstOrFail();
            $update->nama_ikan = $request->input('nama_ikan');
            $update->kategori_id = $request->input('kategori_ikan');
            $update->slug = $request->input('slug');
            $update->harga = $request->input('harga');
            $update->ukuran = $request->input('ukuran_ikan');
            $update->stok = $request->input('stok');
            $update->foto = $request->input('fotolama');
            $update->keterangan = $request->input('keterangan');

            $update->save();
        } 
        return redirect('admin/shop/produk/tambah');
    }

    public function hapus($slug)
    {
        $hapus = Shop::where('slug',$slug)->firstOrFail();
        $hapus->delete();
    }
}
