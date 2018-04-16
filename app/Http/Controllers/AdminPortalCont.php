<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medsos;
use App\About;
use App\Slider;

class AdminPortalCont extends Controller
{
    public function index()
    {
        $ab = About::firstOrFail();
        $medsos = Medsos::firstOrFail();
        $sliders = Slider::all();
    	return view('admin.AdminPortal',compact('medsos','ab','sliders'));
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

    public function about(Request $req,$id)
    {
        if ($req->hasFile('foto')) {

            $foto   = $req->file('foto');
            $nama   = time().'.'.$foto->getClientOriginalExtension();
            $lokasi = public_path('/storage/about');
            $status = $foto->move($lokasi, $nama);

            $ab = About::findOrFail($id);
            $ab->visi = $req->input('visi');
            $ab->misi = $req->input('misi');
            $ab->foto = $nama;
            $ab->tentang = $req->input('tentang');
            $ab->save();
            return redirect('admin/portal');
        }else{
            $ab = About::findOrFail($id);
            $ab->visi = $req->input('visi');
            $ab->misi = $req->input('misi');
            $ab->foto = $req->input('fotoLama');
            $ab->tentang = $req->input('tentang');
            $ab->save();
            return redirect('admin/portal');
        }
    }

    public function slider(Request $req,$id)
    {
        if ($req->hasFile('foto')) {

            $foto   = $req->file('foto');
            $nama   = time().'.'.$foto->getClientOriginalExtension();
            $lokasi = public_path('/storage/slider');
            $status = $foto->move($lokasi, $nama);

            $s = Slider::findOrFail($id);
            $s->judul = $req->input('judul');
            $s->deskripsi = $req->input('keterangan');
            $s->foto = $nama;
            $s->save();
            
            return redirect('admin/portal');
        }else{

            $s = Slider::findOrFail($id);
            $s->judul = $req->input('judul');
            $s->deskripsi = $req->input('keterangan');
            $s->foto = $req->input('slide');
            $s->save();

            return redirect('admin/portal');
        }
    }
}
