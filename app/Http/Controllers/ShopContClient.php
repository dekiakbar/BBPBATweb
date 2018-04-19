<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;
use App\Kshop;
use App\Pesan;

class ShopContClient extends Controller
{
    public function index(Request $request)
    {
    	$kategoris = Kshop::all();
    	$kats = Kshop::latest()->take(3)->get();
    	$datas = Shop::paginate(10);
    	return view('shop.Index',compact('datas','kats','kategoris'))->with('no',($request->input('page',1)-1)*10);
    }

    public function cari(Request $request) 
    {
    	$kategoris = Kshop::all();
    	$kats = Kshop::latest()->take(3)->get();
    	$datas = Shop::where('nama_ikan','LIKE','%'.$cari.'%')->paginate(10);
    	return view('shop.Index',compact('datas','kats','kategoris'))->with('no',($request->input('page',1)-1)*10);
    }

    public function kategori(Request $request,$id)
    {
    	$kats = Kshop::latest()->take(3)->get();
    	$kategoris = Kshop::all();
    	$datas = Shop::where('kategori_id',$id)
    				->paginate(10);
    	return view('shop.Index',compact('datas','kats','kategoris'))->with('no',($request->input('page',1)-1)*10);
    }

    public function tampil_beli($id)
    {
        $data = Shop::findOrFail($id);
        return view('shop.pembelian',compact('data'));
    }

    public function beli(Request $req,$id)
    {
        $beli = Shop::findOrFail($id);
        $beli->stok = $beli->stok-$req->input('jumlah');
        $beli->save();

        $pesan = Pesan::create([
            'nama' => $req->input('nama'),
            'alamat' => $req->input('alamat'),
            'email' => $req->input('email'),
            'pos' => $req->input('pos'),
            'jumlah' => $req->input('jumlah'),
            'hp' => $req->input('no'),
            'shop_id' => $req->input('shop_id'),
        ]);

        $pesan->save();

        return redirect('pembeli/'.encrypt($req->input('email')));
    }

    public function keranjang($email)
    {
        $datas = Pesan::with('shop')->where('email',decrypt($email))->get();
        return view('shop.keranjang',compact('datas'));
    }

    public function pesan_hapus($id)
    {

        $d = Pesan::where('id',$id)->firstOrFail();
        $s = Shop::where('id',$d->shop_id)->firstOrFail();
        $s->stok += $d->jumlah;
        $s->save();
        $h = Pesan::where('id',$id)->delete();
        return back();
    }

}
