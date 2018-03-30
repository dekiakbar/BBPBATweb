<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Juktek;
class JuknisContClient extends Controller
{
    public function index(Request $request)
	{
		$datas = Juktek::orderBy('created_at','desc')->paginate(10);
		return view('juknis',compact('datas'))->with('no',($request->input('page',1)-1)*10);
	}
}
