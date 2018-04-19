<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="" content="">
  <title>Index Admin News</title>
  <meta name="csrf-token" content="">
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/manual.css')}}">
</head>
<body>

   <div class="ui small modal">
        <div class="ui icon header">
            <i class="trash icon"></i>
            Hapus Data Ini
        </div>
        <div class="content right floated">
            <p>Data yang telah dihapus tidak bisa dikembalikan, Anda yakin ingin menghapus data ini?</p>
        </div>
        <div class="actions">
            <div class="ui red inverted cancel inverted button tidak">
                <i class="remove icon"></i>
                Tidak
            </div>
            <div class="ui green ok inverted button tidak ya">
                <i class="checkmark icon"></i>
                Iya
            </div>
        </div>
    </div>

 <div class="ui secondary pointing menu grid computer only blue">
    <div class="header item ">
        Super Admin Dashboard 
      </div>
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

<body>

<div class="ui stackable centered grid">
  <div class="sixteen wide column center aligned">
      <div class="ui segment">
    <h2 class="ui icon header">
  <i class="settings icon"></i>
  <div class="content">
    Admin News
    <div class="sub header">Halaman Untuk Admin News </div>
  </div>
</h2>
  </div>


  <div class="ui container">
      <table class="ui celled table">
  <thead>
    <tr>
      <th>Judul Buku</th>
      <th>Deskripsi</th>
      <th>File</th>
      <th>Opsi</th>
  </tr>
</thead>
  <tbody>
      @foreach($datas as $d)
        <tr>
          <td>{{$d->judul}}</td>
          <td>{{$d->deskripsi}}</td>
          <td><a href="{{ asset('storage/news') }}/{{$d->file}}">Lihat</a></td>
          <td>
            <div class="ui mini buttons">
              <a href="{{ route('news.edit',$d->id) }}" class="ui green button">Edit</a>
              <div class="or"></div>
              <a onclick="delet(this)" id="hapus" data-slug="{{ route('news.destroy',$d->id) }}" data-token="{{ csrf_token() }}" class="ui red button">H</a>
            </div>
          </td>
        </tr>
      @endforeach
  </tbody>
</table>
<div class="ui container center aligned">
    {{ $datas->appends(\Request::except('page'))->links('pagination.semantic-ui') }}
</div>
  </div><footer style="margin-top: 10px;">
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
  <script type="text/javascript">
    function delet(data)
        {
           var token = data.getAttribute('data-token');
           var hapus = data.getAttribute('data-slug'); 
           $('.ui.small.modal')
              .modal({
                 onApprove: function (e) {
                    if (e.hasClass('ya')) {
                        $.ajax({
                            url: hapus,
                            type: 'POST',
                            data: {_method: 'DELETE', _token :token, },
                            success:function(msg){
                                // console.log(hapus);
                                setTimeout(
                                   function() 
                                   {
                                      location.reload();
                                   }, 0001
                                );  
                            }
                          })
                    }
                 },
                 blurring: true,
                 transition: 'fade in'
              })
           .modal('show');
        }  
  </script>

</body>
</html>