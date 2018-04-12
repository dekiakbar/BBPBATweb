<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juktek;
use App\News;
use App\Medsos;
use App\About;
use App\Artikel; 

class PortalController extends Controller
{
    public function index()
    {
        $about = About::firstOrFail();
        $medsos = Medsos::firstOrFail();
    	$juknis = Juktek::latest()->take(5)->get();
    	$news = News::latest()->take(5)->get();
        $posts = Artikel::latest()->take(5)->get();
		return view('index',compact('juknis','news','about','medsos','posts'));
    }

    public function news(Request $req)
    {
    	$beritas = News::paginate(10);
    	return view('news.News',compact('beritas'))->with('no',($req->input('page',1)-1)*10);
    }
}
