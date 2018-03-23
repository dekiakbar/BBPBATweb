@extends('admin.master')
@section('judul','Daftar Petunjuk Teknis')
@section('isi')

  <div class="ui small modal">
    <div class="ui icon header">
      <i class="trash icon"></i>
      Hapus Data Petunjuk Teknis
    </div>
    <div class="content right floated">
      <p>Data petunjuk teknis yang telah dihapus tidak bisa dikembalikan, Anda yakin ingin menghapus petunjuk teknis ini?</p>
    </div>
    <div class="actions">
      <div class="ui red inverted cancel inverted button">
        <i class="remove icon"></i>
        Tidak
      </div>
      <div class="ui green ok inverted button tidak ya">
        <i class="checkmark icon"></i>
        Iya
      </div>
    </div>
  </div>

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
                <a onclick="hapus()" id="hapus" data-slug="{{route('juktek.hapus',$data->slug)}}" data-token="{{ csrf_token() }}" class="ui button red">
                  <i class="trash icon"></i> 
                  Hapus
                </a>
              </td>
            </tr>
          @endforeach          
        </tbody>
      </table>
    </div>
    <div class="ui container center aligned">
      {{ $datas->appends(\Request::except('page'))->links('pagination.semantic-ui') }}
    </div>
  </div>
</div>
@endsection