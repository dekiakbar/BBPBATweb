<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class AdminNews extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $datas = News::paginate(10);
        return view('admin.news.IndexNews',compact('datas'))->with('no',($req->input('page',1)-1)*10);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.InputNews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto   = $request->file('file');
        $nama   = time().'.'.$foto->getClientOriginalExtension();
        $lokasi = public_path('/storage/news');
        $status = $foto->move($lokasi, $nama);

        $simpan = News::create([
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'file' => $nama
        ]);

        $simpan->save();

        return redirect('admin/news/create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = News::findOrFail($id);
        return view('admin.news.EditNews',compact('edit'));
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
        if ($request->hasFile('file')) {
            $foto   = $request->file('file');
            $nama   = time().'.'.$foto->getClientOriginalExtension();
            $lokasi = public_path('/storage/news');
            $status = $foto->move($lokasi, $nama);

            $edit = News::findOrFail($id);
            $edit->judul = $request->input('judul');
            $edit->deskripsi = $request->input('deskripsi');
            $edit->file = $nama;

            $edit->save();
        }else{
            $edit = News::findOrFail($id);
            $edit->judul = $request->input('judul');
            $edit->deskripsi = $request->input('deskripsi');
            $edit->file = $request->input('fileLama');

            $edit->save();
        }

        return redirect('admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = News::findOrFail($id);
        $hapus->delete();
    }
}
