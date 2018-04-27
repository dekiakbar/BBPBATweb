<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="" content="">
	<title>BBPBAT | Keranjang Belanja</title>
	<meta name="csrf-token" content="">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/manual.css')}}">

</head>
<body style="background-color: lightblue">
	<div class="ui secondary pointing menu grid computer only blue">
		<div class="header item ">
    		Market BBPBAT
  		</div>

      <a href="{{ route('landing') }}" class="item">Home</a>
        <a href="{{ route('perpus') }}" class="item">Perpustakaan</a>
        <a href="{{ route('blog') }}" class="item">Berita</a>
        <a href="{{ route('shop') }}" class="item">Market</a>
        <a href="{{ route('pkl') }}" class="item">E-layanan</a>
	</div>


    <h3 class="ui center aligned header" style="margin-bottom: 30px">PEMBELIAN PRODUK</h3>
    <div class="ui one column stackable grid container">
        <div class="ui one column raised segment">
      <div class="column">
        <form class="ui form" action="{{ route('shop.beli',$data->id) }}" method="post">
          <div class="two fields">
          	{{csrf_field()}}
          	<input type="hidden" name="_method" value="patch">

          	<input type="hidden" name="shop_id" value="{{$data->id}}">

            <div class="field">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukan Nama Lengkap">
          </div>
            <div class="field">
            <label>Alamat Lengkap</label>
            <input type="text" name="alamat" placeholder="Masukan Alamat Lengkap">
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Email</label>
            <input type="text" name="email" placeholder="Masukan Alamat Email">
          </div>
            <div class="field">
            <label>Kode Pos</label>
            <input type="text" name="pos" placeholder="Masukan Kode Pos">
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Qty</label>
            <input type="text" name="jumlah" placeholder="Masukan Jumlah Pesanan">
          </div>
            <div class="field">
            <label>No. Hp</label>
            <input type="text" name="no" placeholder="Masukan No. Hp">
          </div>
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form>
        </div>
        </div>
    </div>
    <br>
   


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
</body>
</html>