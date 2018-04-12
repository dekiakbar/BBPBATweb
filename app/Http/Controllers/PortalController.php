<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juktek;
use App\News;
use App\Medsos;
use App\About;
use App\Artikel; 
use App\Slider;

class PortalController extends Controller
{
    public function index()
    {
        $about = About::firstOrFail();
        $medsos = Medsos::firstOrFail();
    	$juknis = Juktek::latest()->take(5)->get();
    	$news = News::latest()->take(5)->get();
        $posts = Artikel::latest()->take(5)->get();
        $slider1 = Slider::where('id',1)->first();
        $slider2 = Slider::where('id',2)->first();
        $slider3 = Slider::where('id',3)->first();
        $slider4 = Slider::where('id',4)->first();
        $slider5 = Slider::where('id',5)->first();
		return view('index',compact('juknis','news','about','medsos','posts','slider1','slider2','slider3','slider4','slider5'));
    }

    public function news(Request $req)
    {
    	$beritas = News::paginate(10);
    	return view('news.News',compact('beritas'))->with('no',($req->input('page',1)-1)*10);
    }
}
