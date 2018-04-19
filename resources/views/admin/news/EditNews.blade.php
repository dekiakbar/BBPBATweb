@extends('admin.master')
@section('judul','Input News')

@section('isi')
<div class="ui stackable centered grid">
  <div class="sixteen wide column center aligned">
      <div class="ui segment">
    <h2 class="ui icon header">
  <i class="settings icon"></i>
  <div class="content">
    Admin News
    <div class="sub header">Halaman Untuk Menginput News </div>
  </div>
</h2>
  </div>

<div class="ui container">
   <div class="ui segment">
      <form class="ui form" method="post" action="{{ route('news.update',$edit->id) }}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="patch">
            <div class="two fields">
              <div class="field">
                <label>Judul</label>
                <input placeholder="Isi Judul Buku" type="text" name="judul" value="{{$edit->judul}}">
              </div>

              <div class="field">
                 <div class="ui stackable centered grid">
                    <div class="six wide column center aligned">
                      <label>File</label>
                      <input type="file" name="file"> 
                      <input type="hidden" name="fileLama" value="{{$edit->file}}">
                    </div>
                  </div>
              </div>
            </div>
                <div class="ui form">
                    <div class="field">
                      <label>Deskripsi</label>
                      <textarea name="deskripsi">{{$edit->deskripsi}}</textarea>
                </div>
              </div>

              <div class="ui stackable centered grid">
          <div class="six wide column center aligned">
            <button type="submit" class="ui button" tabindex="0">Simpan</button>
          </div>
        </div>
      
        </form>
     </div>
</div>
      </div>
  </div>

<br>
</div>
@endsection