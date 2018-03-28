@extends('admin.master')
@section('judul','Tambah Kategori Market')

@section('isi')
    <h3 class="ui center aligned header" style="margin-bottom: 30px">INPUT DATA PRODAK</h3>
    <div class="ui one column stackable grid container">
        <div class="ui one column raised segment">
      <div class="column">
        <form enctype="multipart/form-data" class="ui form" action="{{route('shop.update',$edit->slug)}}" method="post">
        	{{csrf_field()}}
          <input type="hidden" name="_method" value="PATCH">
          <div class="two fields">
            <div class="field">
            <label>Nama Ikan</label>
            <input type="text" name="nama_ikan" id="dataSlug" onkeyup="buatSlug()" placeholder="Nama Ikan" value="{{$edit->nama_ikan}}">
            <input type="hidden" name="slug" id="slug" value="{{$edit->slug}}">
          </div>
            <div class="field">
            <label>Harga Ikan</label>
            <div class="ui right labeled input">
              <label for="harga" class="ui label">Rp.</label>
              <input type="text" placeholder="Harga Ikan" name="harga" value="{{$edit->harga}}">
              <div class="ui dropdown label" >
              	<input type="hidden" name="harga1" >
                <div class="text">Ekor</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                  <div class="item" data-value="ekor">Ekor</div>
                  <div class="item" data-value="kg">Kg</div>
                  <div class="item" data-value="pasang">Pasang</div>
                  <div class="item" data-value="paket">Paket</div>
                </div>
              </div>
            </div>
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Kategori Ikan</label>
            <select class="ui fluid dropdown" name="kategori_ikan">
            	@foreach($kategoris as $k)
                @if($k->id == $edit->kategori->id)
            		  <option value="{{$k->id}}" selected>{{$k->nama_kategori}}</option>
            	  @else
                  <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                @endif
              @endforeach
            </select>
          </div>
            <div class="field">
            <label>Ukuran Ikan</label>
            <input type="text" name="ukuran_ikan" placeholder="Ukuran Ikan" value="{{$edit->ukuran}}">
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Stock Ikan</label>
            <div class="ui right labeled input">
              <input type="text" placeholder="Stock Ikan" name="stok" value="{{$edit->stok}}">
              <div class="ui label">
                <div class="text">Ekor</div>
              </div>
            </div>
          </div>
            <div class="field">
            <div class="field">
            <label>Uplode Gambar</label>
            <input type="file" name="foto" placeholder="Nama Ikan">
            <input type="hidden" name="fotolama" value="{{$edit->foto}}">
          </div>
          </div>
            </div>
            <div class="field">
            <label>Keterangan</label>
            <textarea rows="3" name="keterangan">{{$edit->keterangan}}</textarea>
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form>
        </div>
        </div>
    </div>
@endsection