<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;
use App\Kshop;
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

}
