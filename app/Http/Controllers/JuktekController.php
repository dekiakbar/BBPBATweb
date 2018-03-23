<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Juktek;

class JuktekController extends Controller
{
    public function index()
    {

    }

    public function tambah()
    {
    	return view('admin.juktek.Tjuktek');
    }

    public function simpan(Request $request)
    {
    	if ($request->hasFile('foto')) {
    		$foto = $request->file('foto');
    		$nama = time().$request->file('foto')->getClientOriginalExtension();
    		$tempat = public_path('/storage/juktek');
    		$status = $foto->move($tempat,$nama);

    		$simpan = Juktek::create([
    			'judul_juktek' => $request->input('judul'),
    			'slug' => $request->input('slug'),
    			'kutipan' => $request->input('kutipan'),
    			'isi' => $request->input('artikel'),
    			'foto' => $nama,
    		]);
    	}

    	return redirect('admin/juktek/tambah');
    }
}
