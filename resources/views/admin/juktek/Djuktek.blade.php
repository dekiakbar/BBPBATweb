@extends('admin.master')
@section('judul','Tambah Petunjuk Teknis')
@section('isi')
<div class="ui stackable centered grid">
  <div class="sixteen wide column center aligned">
      <div class="ui segment">
        <h2 class="ui icon header">
          <i class="settings icon"></i>
          <div class="content">
            Admin Petunjuk Teknis
            <div class="sub header">Halaman Untuk Melihat Petunjuk Teknis </div>
          </div>
        </h2>
      </div>

    <div class="ui container">
      <table class="ui celled table">
        <thead>
          <tr>
            <th>Judul Petunjuk Teknis</th>
            <th>Tanggal</th>
            <th>Foto</th>
            <th class="center aligned">Opsi</th>
          </tr>
        </thead>
        
        <tbody>
          <tr>
            <td>Budidaya Ikan Nila</td>
            <td>12-12-12</td>
            <td>ini foto</td>
            <td class="center aligned">
              <a class="ui button teal"><i class="edit icon"></i> Edit</a>
              <a class="ui button blue"><i class="zoom icon"></i> Lihat</a>
              <a class="ui button red"><i class="trash icon"></i> Hapus</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection