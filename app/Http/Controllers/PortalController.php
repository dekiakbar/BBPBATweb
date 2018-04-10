<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juktek;
use App\News;

class PortalController extends Controller
{
    public function index()
    {
    	$juknis = Juktek::latest()->take(5)->get();
    	$news = News::latest()->take(5)->get();
		return view('index',compact('juknis','news'));
    }

    public function news(Request $req)
    {
    	$beritas = News::paginate(10);
    	return view('news.News',compact('beritas'))->with('no',($req->input('page',1)-1)*10);
    }
}
