<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pkl;

use PDF;
class PklController extends Controller
{
	public function index(Request $request)
	{
		$datas = Pkl::paginate(10);
		return view('admin.pkl.indexpkl',compact('datas'))->with('no',($request->input('page',1)-1)*10);
	}

    public function tambah()
    {
    	return view('admin.pkl.daftarpkl');
    }

    public function simpan(Request $request)
    {
    	$mulai = strtotime($request->input('mulai'));
    	$selesai = strtotime($request->input('selesai'));
    	$mulai = date('Y-m-d',$mulai);
    	$selesai = date('Y-m-d',$selesai);

    	$simpan = Pkl::create([
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
    		'mulai' => $mulai,
    		'selesai' => $selesai,
    		'golongan' => $request->input('golongan')
    	]);

    	$simpan->save();
    	return redirect('admin/pkl');
    }

    public function edit($id)
    {
    	$data = Pkl::findOrFail($id);
    	return view('admin.pkl.Edaftarpkl',compact('data'));
    }

    public function perbaharui(Request $request, $id)
    {
    	$mulai = strtotime($request->input('mulai'));
    	$selesai = strtotime($request->input('selesai'));
    	$mulai = date('Y-m-d',$mulai);
    	$selesai = date('Y-m-d',$selesai);

    	$update = Pkl::findOrFail($id);
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
    	$update->mulai = $mulai;
    	$update->selesai = $selesai;
    	$update->golongan = $request->input('golongan');

    	$update->save();
    	return redirect('admin/pkl');
    }

    public function hapus($id)
    {
    	$hapus = Pkl::findOrFail($id);
    	$hapus->delete();
    }

    public function download_csv(Request $req)
    {
    	$mulai = strtotime($req->input('mulai'));
    	$selesai = strtotime($req->input('selesai'));
    	$mulai = date('Y-m-d',$mulai);
    	$selesai = date('Y-m-d',$selesai);

    	$pkl =  Pkl::whereBetween('mulai', [$req->mulai, $req->selesai])->get();
    	// return response()->json($pkl);
    	$csv = new \Laracsv\Export();
    	$csv->build($pkl,[
    		'nama_kegiatan','nama_lengkap','email','ttl','alamat',
    		'no','nama_instansi','alamat_instansi','alamat_tinggal',
    		'judul_kegiatan','mulai','selesai','golongan'
    	])
    	->download();
    }

    public function pdf($id)
    {
    	$data = Pkl::where('id',$id)->first();

        // view()->share(['data'=>$data]);
    	$pdf = PDF::loadView('pdf.magang',$data);
    	return $pdf->stream('magang.pdf');
    }
}
