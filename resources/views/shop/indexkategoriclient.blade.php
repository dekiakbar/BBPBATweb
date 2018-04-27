<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="" content="">
	<title>template admin nyah</title>
	<meta name="csrf-token" content="">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/manual.css'">

</head>
<body style="background-color: lightblue">
	<div class="ui secondary pointing menu grid computer only blue">
		<a href="{{ route('landing') }}" class="item">Home</a>
	      <a href="{{ route('perpus') }}" class="item">Perpustakaan</a>
	      <a href="{{ route('blog') }}" class="item">Berita</a>
	      <a href="{{ route('shop') }}" class="item">Market</a>
	      <a href="{{ route('pkl') }}" class="item">E-layanan</a>
	</div>

	<div class="ui menu grid mobile only" style="margin-top: 0px;">
		<div class="header item">
    		Laravel Artikel
  		</div>
  		<div class="right menu">
  			<a class="ui item mobile only" onclick="tampil();"><i class="icon list blue"></i></a>
  		</div>
	</div>

	<div class="ui longer modal">
	  	<div class="header">Menu</div>
	  	<div class="content">
	  		<div class="ui grid center aligned">
		  		<div class="ui vertical menu">
		  			<div class="item">
				    	<div class="header">Kategori</div>
				    	<div class="menu">
				      		<a class="item">Ikan</a>
				      		<a class="item">Kodok</a>
                            <a class="item">Udang</a>
				    	</div>
				  	</div>
				  	<div class="item">
				    	<div class="header">Keranjang</div>
				    	<div class="menu">
				      		<a class="item">List Barang</a>
				      		<a class="item">Pembayaran</a>
				    	</div>
				  	</div>
		  		</div>
			</div>
		</div>
	</div>


    <h3 class="ui center aligned header" style="margin-bottom: 30px">BBPBAT MARKET</h3>
    <div style="margin-left: 15px" class="item">
        <i class="linkify icon"></i><a>Sesuai Kategori</a>
    </div>
    <div style="margin-left: 70px" class="ui stackable column grid">
        <div style="margin-left: 43px" class="fifteen wide column">
        <div class="ui segment">
          <div class="ui card">
              <div class="content">
                  <i class="comment icon"></i>
                <a>Nama Ikan</a><br><br>
                <img class="ui image" src="jpg/1.jpg"> 
              </div>
              <div class="image">
                <img>
              </div>
              <div class="content">
                <span class="right floated">
                  <i class="heart outline like icon"></i>
                  <a>Stok Ikan</a>
                </span>
                  <i class="dollar sign icon"></i>
                <a>Harga Ikan</a>
              </div>
               <div class="content">
                <button class="ui icon button">
                  <i class="shopping cart icon"></i>
                </button>
              </div>
            </div>
        </div>
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

	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/manual.js"></script>
</body>
</html>