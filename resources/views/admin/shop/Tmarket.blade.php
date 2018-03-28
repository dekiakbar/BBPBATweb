@extends('admin.master')
@section('judul','Tambah Kategori Market')

@section('isi')
    <h3 class="ui center aligned header" style="margin-bottom: 30px">INPUT DATA PRODAK</h3>
    <div class="ui one column stackable grid container">
        <div class="ui one column raised segment">
      <div class="column">
        <form class="ui form">
          <div class="two fields">
            <div class="field">
            <label>Nama Ikan</label>
            <input type="text" name="first-name" placeholder="Nama Ikan">
          </div>
            <div class="field">
            <label>Harga Ikan</label>
            <div class="ui right labeled input">
              <label for="harga" class="ui label">Rp.</label>
              <input type="text" placeholder="Harga Ikan" id="harag">
              <div class="ui dropdown label">
                <div class="text">Ekor</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                  <div class="item">Ekor</div>
                  <div class="item">Kg</div>
                  <div class="item">PSNG</div>
                    <div class="item">PKT</div>
                </div>
              </div>
            </div>
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Jenis Ikan</label>
            <input type="text" name="first-name" placeholder="Jenis Ikan">
          </div>
            <div class="field">
            <label>Ukuran Ikan</label>
            <input type="text" name="first-name" placeholder="Jenis Ikan">
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Stock Ikan</label>
            <div class="ui right labeled input">
              <input type="text" placeholder="Stock Ikan">
              <div class="ui label">
                <div class="text">Ekor</div>
              </div>
            </div>
          </div>
            <div class="field">
            <div class="field">
            <label>Uplode Gambar</label>
            <input type="file" name="first-name" placeholder="Nama Ikan">
          </div>
          </div>
            </div>
            <div class="field">
            <label>Keterangan</label>
            <textarea rows="3"></textarea>
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