@extends('admin.master')
@section('judul','Daftar Petunjuk Teknis')
@section('isi')
<div class="ui stackable centered grid">
  <div class="sixteen wide column center aligned">
      <div class="ui segment">
        <h2 class="ui icon header">
          <i class="settings icon"></i>
          <div class="content">
            Admin Petunjuk Teknis
            <div class="sub header">Halaman Untuk Melihat Daftar Petunjuk Teknis </div>
          </div>
        </h2>
      </div>

    <div class="ui container">
      <table class="ui celled table">
        <thead>
          <tr>
            <th>Judul Petunjuk Teknis</th>
            <th>Slug</th>
            <th>Foto</th>
            <th class="center aligned">Opsi</th>
          </tr>
        </thead>
        
        <tbody>
          @foreach($datas as $data)
            <tr>
              <td>{{$data->judul_juktek}}</td>
              <td>{{$data->slug}}</td>
              <td class="center aligned">
                <img class="ui middle aligned tiny image" src="{{asset('storage/juktek')}}/{{$data->foto}}">
              </td>
              <td class="center aligned">
                <a href="{{route('juktek.edit',$data->slug)}}" class="ui button teal"><i class="edit icon"></i> Edit</a>
                <a href="{{route('juktek.detail',$data->slug)}}" class="ui button blue"><i class="zoom icon"></i> Lihat</a>
                <a class="ui button red"><i class="trash icon"></i> Hapus</a>
              </td>
            </tr>
          @endforeach          
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection