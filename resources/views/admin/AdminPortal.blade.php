<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="" content="">
	<title>Admin | Portal Input</title>
	<meta name="csrf-token" content="">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/manual.css')}}">

</head>
<body style="background-color: lightblue">
    <div class="ui secondary pointing menu grid computer only blue">
        <a href="{{ url('admin/') }}" class="header item ">
            Super Admin Dashboard
        </a>
        <div class="ui pointing dropdown link item">
            <span class="text">Portal</span>
            <i class="dropdown icon"></i>
            <div class="menu">
                <a href="{{ url('admin/juktek/tambah') }}" class="item"><i class="icon plus"></i>Tambah Juktek</a>
                <a href="{{ url('admin/juktek') }}" class="item"><i class="icon list"></i>Daftar Juktek</a>
            </div>
        </div>
        <div class="ui pointing dropdown link item">
            <span class="text">Blog</span>
            <i class="dropdown icon"></i>
            <div class="menu">
                <a href="{{ url('admin/artikel/create') }}" class="item"><i class="icon plus"></i>Tambah Artikel</a>
                <a href="{{ url('admin/artikel/') }}" class="item"><i class="icon list"></i>Daftar Artikel</a>
                <a href="{{ url('admin/kategori/create') }}" class="item"><i class="icon plus"></i>Tambah Kategori</a>
                <a href="{{ url('admin/kategori') }}" class="item"><i class="icon list"></i>Daftar Kategori</a>
                <a href="{{ url('admin/tag/create') }}" class="item"><i class="icon plus"></i>Tambah Tag</a>
                <a href="{{ url('admin/tag') }}" class="item"><i class="icon list"></i>Daftar Tag</a>
            </div>
        </div>
        <div class="ui pointing dropdown link item">
            <span class="text">Perpustakaan</span>
            <i class="dropdown icon"></i>
            <div class="menu">
                <a href="{{ url('admin/perpus/buku/tambah') }}" class="item"><i class="icon plus"></i>Tambah Buku</a>
                <a href="{{ url('admin/perpus/buku') }}" class="item"><i class="icon list"></i>Daftar Buku</a>
                <a href="{{ url('admin/perpus/kategori/tambah') }}" class="item"><i class="icon plus"></i>Tambah Kategori</a>
            </div>
        </div>
        <div class="ui pointing dropdown link item">
            <span class="text">Markets</span>
            <i class="dropdown icon"></i>
            <div class="menu">
                <a href="{{ url('admin/shop/produk/tambah') }}" class="item"><i class="icon plus"></i>Tambah Produk</a>
                <a href="{{ url('admin/shop/produk') }}" class="item"><i class="icon list"></i>Daftar Produk</a>
                <a href="{{ url('admin/shop/kategori/tambah') }}" class="item"><i class="icon plus"></i>Tambah Kategori</a>
                <a href="{{ url('admin/shop/kategori') }}" class="item"><i class="icon list"></i>Daftar Kategori</a>
            </div>
        </div>
        <div class="ui pointing dropdown link item">
            <span class="text">Magang</span>
            <i class="dropdown icon"></i>
            <div class="menu">
                <a href="{{ url('admin/pkl') }}" class="item"><i class="icon plus"></i>Data PKL</a>
            </div>
        </div>
        <div class="right menu">
            <a href="{{ route('logout') }}" class="ui item animated fade button teal" onclick="event.preventDefault();document.getElementById('keluar').submit();">
                <div class="hidden content">
                    <i class="sign out icon"></i>
                </div>
                <div class="visible content">
                    Keluar    
                </div>
            </a>
            <form id="keluar" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>

        @foreach($sliders as $sl)
        <div class="ui modal hadiah" id="{{md5($sl->id.'slider')}}">
            <i class="close icon"></i><br>
            <div class="ui one column stackable grid container">
                <div style="margin-left: 1px" class="ui one column grid">
                  <div class="column">
                    <div class="ui raised segment">
                      <h3 class="ui center aligned header" style="margin-bottom: 30px">EDIT DATA SLIDER</h3>
                      <div class="column">
                        <form class="ui form" method="post" action="{{ route('admin.slider',$sl->id) }}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="patch">
                            <div class="two fields">
                            <div class="field">
                            <label>Judul Slider</label>
                            <input type="text" name="judul" placeholder="Judul Slider" value="{{$sl->judul}}">
                            </div>
                            <div class="field">
                            <label>Upload Foto</label>
                            <input type="file" name="foto">
                            <input type="hidden" name="slide" value="{{$sl->foto}}">
                            </div>
                            </div>
                            <div class="field">
                            <label>Keterangan</label>
                            <textarea rows="7" name="keterangan">{{$sl->deskripsi}}</textarea>
                            </div>
                            <button class="blue ui button" type="submit">Edit</button>
                        </form>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="actions">
                <div class="ui positive rights icon button">
                  Close
                </div>
            </div>
        </div>
    @endforeach

    <div style="margin-left: 100px; margin-right: 100px" class="column">
    <div class="ui top attached tabular menu">
      <a class="item" data-tab="first">Slider</a>
      <a class="item" data-tab="second">Media Sosial</a>
      <a class="item" data-tab="third">About</a>
    </div>
    
    <div class="ui bottom attached tab segment active" data-tab="first">
    <h3 class="ui center aligned header" style="margin-bottom: 30px">IMAGE SLIDER</h3>
    <div class="ui one column stackable grid container">
        <br>

        <div class="ui column stackable grid container">
        <div class="column">
            <table class="ui celled table">
              <thead>
                <tr>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
               <th class="one wide column" >Opsi</th>
              </tr></thead>
              <tbody>
                @foreach($sliders as $s)
                    <tr>
                        <td>{{$s->judul}}</td>
                        <td><img class="ui tiny image" src="{{ asset('storage/slider') }}/{{$s->foto}}"></td>
                        <td>{{$s->deskripsi}}</td>
                        <td style="text-align: center">
                            <div class="mini ui buttons">
                              <button class="ui green button" data-id="{{md5($s->id.'slider')}}" onclick="gift(this)" >Edit</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>

    </div>
    <br>
    <br>
    </div>
        
    <div class="ui bottom attached tab segment active" data-tab="second">
    <h3 class="ui center aligned header" style="margin-bottom: 30px">INPUT MEDSOS ACCOUNT</h3>
    <div class="ui one column stackable grid container">
    <div class="ui one column raised segment">
      <div class="column">
        <form class="ui form" action="{{ route('admin.medsos',$medsos->id) }}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="patch">
          <div class="two fields">
            <div class="field">
            <label>Link Facebook</label>
            <input type="text" name="fb" placeholder="Facebook Account" value="{{$medsos->fb}}">
            </div>
            <div class="field">
            <label>Link Twitter</label>
            <input type="text" name="tweet" placeholder="Twitter Account" value="{{$medsos->tweet}}">
            </div>
          </div>
            <div class="two fields">
            <div class="field">
            <label>Link Google Plus</label>
            <input type="text" name="google" placeholder="google+ Account" value="{{$medsos->google}}">
            </div>
            <div class="field">
            <label>Link Instagram</label>
            <input type="text" name="ig" placeholder="Instagram Account" value="{{$medsos->ig}}">
            </div>
          </div>
            <button class="blue ui button" type="submit">Submit</button>
        </form>
        </div>
        </div>
    </div><br>
    </div>
        
    <div class="ui bottom attached tab segment" data-tab="third">
    <h3 class="ui center aligned header" style="margin-bottom: 30px">INPUT PAGE ABOUT</h3>
        <div class="ui one column stackable grid container">
            <div class="ui one column raised segment">
          <div class="column">
            <form class="ui form" action="{{ route('admin.about',$ab->id) }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="patch">
                <div class="field">
                <label>Visi</label>
                <textarea name="visi" rows="7">{{$ab->visi}}</textarea>
                </div>
                <div class="two fields">
                <div style="width: 700px" class="field">
                <label>Misi</label>
                <textarea name="misi" rows="7">{{$ab->misi}}</textarea>
                </div>
                <div class="field">
                <label>Uplode Gambar About</label>
                <input type="file" name="foto">
                <input type="hidden" name="fotoLama" value="{{$ab->foto}}">
              </div>
              </div>
                <div class="field">
                <label>Tentang</label>
                <textarea name="tentang" rows="4">{{$ab->tentang}}</textarea>
                </div>
                <button class="green ui button" type="submit">Submit</button>
            </form>
            </div>
            </div>
        </div>
        <br>
        </div>
        </div>
    

	<footer style="margin-top: 30px;">
		<div class="ui segment center aligned blue">
			<p>&copy;2018
				| Made With :
				<a target="_blank" href="https://Laravel.com">Laravel</a>
				<i class="large pink heartbeat icon"></i>
				<a target="_blank" href="https://Semantic-ui.com">Semantic</a>
			</p>
		</div>
	</footer>

	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/manual.js')}}"></script>
    <script>
        $('.menu .item').tab();

        function gift(data)
        {
            // $('.ui.modal.hadiah').modal('show');
            var edit = data.getAttribute('data-id');
            var id = '#'+edit;
            $(id).modal('show');
        }
    </script>
</body>
</html>