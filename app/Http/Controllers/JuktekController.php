<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuktekController extends Controller
{
    public function index()
    {

    }

    public function tambah()
    {
    	return view('admin.juktek.Tjuktek');
    }

    public function simpan()
    {
    	
    }
}
