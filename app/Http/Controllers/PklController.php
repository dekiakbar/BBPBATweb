<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pkl;

class PklController extends Controller
{
	public function index(Request $request)
	{
		$datas = Pkl::paginate(10);
		return view('indexpkl',compact('datas'))->with('no',($request->input('page',1)-1)*10);
	}

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

    public function perbaharui(Request $request, $id)
    {
    	$update = findOrFail($id);
    	$update->nama_kegiatan = $request->input('nama_kegiatan');
    	$update->nama_lengkap = $request->input('nama');
    	$update->email = $request->input('email');
    	$update->ttl = $request->input('ttl');
    	$update->alamat = $request->input('alamat_rumah');
    	$update->no = $request->input('no');
    	$update->nama_instansi = $request->input('instansi');
    	$update->alamat_instansi = $request->input('alamat_instansi');
    	$update->alamat_tinggal = $request->input('alamat_tinggal');
    	$update->judul_kegiatan = $request->input('judul_kegiatan');
    	$update->mulai = $request->input('mulai');
    	$update->selesai = $request->input('selesai');
    	$update->golongan = $request->input('golongan');

    	$update->save();
    	return redirect('pkl/');
    }

}
