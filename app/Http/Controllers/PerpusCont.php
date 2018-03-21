<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\kategoriPerpus;
use App\Perpus;

class PerpusCont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bukus = Perpus::with('kategori')->paginate(10);
        return view('admin.perpus.Iperpus',compact('bukus'))->with('no',($request->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $kategoris = kategoriPerpus::all();
        return view('admin.perpus.Tperpus',compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan(Request $request)
    {
        $buku = Perpus::create([
            'judul_buku' => $request->input('judul'),
            'kategoriPerpus_id' => $request->input('kategori'),
            'pengarang' => $request->input('pengarang'),
            'tahun_terbit' => $request->input('tahun'),
        ]);

        $buku->save();

        return redirect('admin/buku/tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Ktambah(Request $request)
    {
        $simpan = kategoriPerpus::create([
            'nama_kategori' => $request->input('nama_kategori')
        ]);

        $simpan->save();
        return redirect('admin/kategori/tambah');
    }

    public function Ktampil()
    {
        $kategoris = kategoriPerpus::all();
        return view('admin.perpus.Tperpus',compact('kategoris'));
    }

}
