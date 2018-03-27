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
    	if ($request->hasFile('foto') || $request->hasFile('file')) {
    		$foto = $request->file('foto');
    		$nama = time().'.'.$request->file('foto')->getClientOriginalExtension();
    		$tempat = public_path('/storage/juktek');
    		$status = $foto->move($tempat,$nama);

            $file = $request->file('file');
            $namaF = time().'.'.$request->file('file')->getClientOriginalExtension();
            $status = $file->move($tempat,$namaF);
    		$simpan = Juktek::create([
    			'judul_juktek' => $request->input('judul'),
    			'slug' => $request->input('slug'),
    			'kutipan' => $request->input('kutipan'),
    			'file' => $namaF,
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
    	if ($request->hasFile('foto') || $request->hasFile('file')) {

    		$foto = $request->file('foto');
    		$nama = time().'.'.$request->file('foto')->getClientOriginalExtension();
    		$tempat = public_path('/storage/juktek');

            $file = $request->file('file');
            $namaF = time().'.'.$request->file('file')->getClientOriginalExtension();
            $status = $file->move($tempat,$namaF);

    		$update = Juktek::where('slug',$slug)->FirstOrFail();
    		$update->judul_juktek = $request->input('judul');
    		$update->slug = $request->input('slug');
    		$update->kutipan = $request->input('kutipan');
    		$update->file = $namaF;
    		$update->foto = $nama;
    		$update->save();

    		$status = $foto->move($tempat,$nama);
    		$hapus = @unlink('/storage/juktek/'.$update->foto);
    	}else{
    		$update = Juktek::where('slug',$slug)->FirstOrFail();
    		$update->judul_juktek = $request->input('judul');
    		$update->slug = $request->input('slug');
    		$update->kutipan = $request->input('kutipan');
            $update->file = $request->input('filelama');
            $update->foto = $request->input('fotolama');
    	}
    	
    	return redirect('admin/juktek');
    }

    public function hapus($slug)
    {
    	$hapus = Juktek::where('slug',$slug)->firstOrFail();
    	@unlink('/storage/juktek/'.$hapus->foto);
        @unlink('/storage/juktek/'.$hapus->file);
    	$hapus->delete();
    }

}
