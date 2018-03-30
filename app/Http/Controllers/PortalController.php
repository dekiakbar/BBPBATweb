<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juktek;
class PortalController extends Controller
{
    public function index()
    {
    	$juknis = Juktek::latest()->take(5)->get();
		return view('index',compact('juknis'));
    }
}
