<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KshopCont extends Controller
{
    public function index()
    {

    }

    public function tambah()
    {
        return view('admin.shop.Tmarket');
    }
}
