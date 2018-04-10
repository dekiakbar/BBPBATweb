@extends('admin.master')
@section('judul','Tambah Kategori Market')

@section('isi')
    <h3 class="ui center aligned header" style="margin-bottom: 30px">INPUT DATA PRODAK</h3>
    <div class="ui one column stackable grid container">
        <div class="ui one column raised segment">
      <div class="column">
        <form enctype="multipart/form-data" class="ui form" action="{{route('shop.tambah')}}" method="post">
        	{{csrf_field()}}
          <div class="two fields">
            <div class="field">
            <label>Nama Ikan</label>
            <input type="text" name="nama_ikan" id="dataSlug" onkeyup="buatSlug()" placeholder="Nama Ikan">
            <input type="hidden" name="slug" id="slug">
          </div>
            <div class="field">
            <label>Harga Ikan</label>
            <div class="ui right labeled input">
              <label for="harga" class="ui label">Rp.</label>
              <input type="text" placeholder="Harga Ikan" name="harga">
            </div>
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Kategori Ikan</label>
            <select class="ui fluid dropdown" name="kategori_ikan">
            	@foreach($kategoris as $k)
            		<option value="{{$k->id}}">{{$k->nama_kategori}}</option>
            	@endforeach
            </select>
          </div>
            <div class="field">
            <label>Ukuran Ikan</label>
            <input type="text" name="ukuran_ikan" placeholder="Ukuran Ikan">
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Stock Ikan</label>
            <div class="ui right labeled input">
              <input type="text" placeholder="Stock Ikan" name="stok">
            </div>
          </div>
            <div class="field">
            <div class="field">
            <label>Uplode Gambar</label>
            <input type="file" name="foto" placeholder="Nama Ikan">
          </div>
          </div>
            </div>
            <div class="field">
            <label>Keterangan</label>
            <textarea rows="3" name="keterangan"></textarea>
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form>
        </div>
        </div>
    </div>
    <br>
    <h3 class="ui center aligned header" style="margin-bottom: 30px">INPUT KATEGORI MARKET</h3>
    <div class="ui one column stackable grid container">
        <div class="ui one column raised segment">
      <div class="column">
        <form class="ui form" method="post" action="{{route('Kshop.tambah')}}">
        	{{csrf_field()}}
          <div class="two fields">
            <div class="field">
            <label>Kategori</label>
            <input type="text" name="nama_kategori" placeholder="Masukan Ketegori">
          </div>
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form>
        </div>
        </div>
    </div>
@endsection