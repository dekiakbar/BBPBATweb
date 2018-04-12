<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medsos;

class AdminPortalCont extends Controller
{
    public function index()
    {
        $medsos = Medsos::firstOrFail();
    	return view('admin.AdminPortal',compact('medsos'));
    }

    public function medsos(Request $req,$id){
        $link = Medsos::findOrFail($id);
        $link->fb = $req->input('fb');
        $link->tweet = $req->input('tweet');
        $link->google = $req->input('google');
        $link->ig = $req->input('ig');
        $link->save();
        
        return redirect('admin/portal');
    }


}
