<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pkl;

class PklController extends Controller
{
    public function tambah()
    {
    	return view('daftarpkl');
    }

    public function simpan(Request $request)
    {
    	$simpan = Pkl::insert([
    		'nama_kegiatan' => $request->input('nama_kegiatan'),
    		'nama_lengkap' => $request->input('nama'),
    		'email' => $request->input('email'),
    		'ttl' => $request->input('ttl'),
    		'alamat' => $request->input('alamat_rumah'),
    		'no' => $request->input('no'),
    		'nama_instansi' => $request->input('instansi'),
    		'alamat_instansi' => $request->input('alamat_instansi'),
    		'alamat_tinggal' => $request->input('alamat_tinggal'),
    		'judul_kegiatan' => $request->input('judul_kegiatan'),
    		'mulai' => $request->input('mulai'),
    		'selesai' => $request->input('selesai'),
    		'golongan' => $request->input('golongan')
    	]);

    	$simpan->save();
    	return redirect('pkl/tambah');
    }

    public function edit($id)
    {
    	$data = Pkl::findOrFail($id);
    	return view('Edaftarpkl',compact('data'));
    }

    // public function 

}
