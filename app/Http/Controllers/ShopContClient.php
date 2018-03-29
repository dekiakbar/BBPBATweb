<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;
use App\Kshop;
class ShopContClient extends Controller
{
    public function index(Request $request)
    {
    	$kats = Kshop::latest()->take(3)->get();
    	$datas = Shop::paginate(10);
    	return view('shop.Index',compact('datas','kats'))->with('no',($request->input('page',1)-1)*10);
    }

    public function cari(Request $request) 
    {
    	$kats = Kshop::latest()->take(3)->get();
    	$datas = Shop::where('nama_ikan','LIKE','%'.$cari.'%')->paginate(10);
    	return view('shop.Index',compact('datas','kats'))->with('no',($request->input('page',1)-1)*10);
    }

}
