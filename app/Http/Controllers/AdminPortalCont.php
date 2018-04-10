<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPortalCont extends Controller
{
    public function index()
    {
    	return view('admin.AdminPortal');
    }
}
