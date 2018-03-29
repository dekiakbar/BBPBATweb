<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;
class ShopContClient extends Controller
{
    public function index()
    {
    	$datas = Shop::paginate(10);
    	return view('shop.Index',compact('datas'));
    }

    
}
