<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Juktek;

class JuktekController extends Controller
{
    public function index(Request $request)
    {
    	$datas = Juktek::paginate(10);

    	return view('admin.juktek.Ijuktek',compact('datas'))->with('no',($request->input('page',1)-1)*10);
    }

    public function tambah()
    {
    	return view('admin.juktek.Tjuktek');
    }

    public function simpan(Request $request)
    {
    	if ($request->hasFile('foto')) {
    		$foto = $request->file('foto');
    		$nama = time().'.'.$request->file('foto')->getClientOriginalExtension();
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

    public function edit($slug)
    {
    	$edit = Juktek::where('slug',$slug)->FirstOrFail();
    	return view('admin.juktek.Ejuktek',compact('edit')); 
    }

    public function perbaharui(Request $request,$slug)
    {
    	if ($request->hasFile('foto')) {

    		$foto = $request->file('foto');
    		$nama = time().'.'.$request->file('foto')->getClientOriginalExtension();
    		$tempat = public_path('/storage/juktek');

    		$update = Juktek::where('slug',$slug)->FirstOrFail();
    		$update->judul_juktek = $request->input('judul');
    		$update->slug = $request->input('slug');
    		$update->kutipan = $request->input('kutipan');
    		$update->isi = $request->input('artikel');
    		$update->foto = $nama;
    		$update->save();

    		$status = $foto->move($tempat,$nama);
    		//$hapus = unlink('/storage/juktek/'.$update->foto);
    	}else{
    		$update = Juktek::where('slug',$slug)->FirstOrFail();
    		$update->judul_juktek = $request->input('judul');
    		$update->slug = $request->input('slug');
    		$update->kutipan = $request->input('kutipan');
    		$update->isi = $request->input('artikel');
    		$update->foto = $request->input('fotolama');
    	}
    	
    	return redirect('admin/juktek');
    }

    public function detail($slug)
    {
    	$detail = Juktek::where('slug',$slug)->firstOrFail();
    	return view('admin.juktek.Djuktek',compact('detail'));
    }

}
