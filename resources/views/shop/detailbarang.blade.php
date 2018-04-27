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



    <h3 class="ui center aligned header" style="margin-bottom: 30px">DETAIL PRODAK</h3>
    <div class="ui center aligned stackable one column grid">
      <div style="text-align: left" class="nine wide column">
        <a>Nama Ikan</a>
          <div class="ui segment">
          <img class="ui centered big image" src="jpg/1.jpg">
        </div>
        </div>
      <div class="four wide column">
          <div style="margin-top: 33px" class="ui list">
              <div style="text-align: left" class="ui segment">
          <div class="item">
            <i class="caret square right outline icon"></i>
            <div class="content">
              Jenis Ikan
            </div>
          </div>
          <div class="item">
            <i class="caret square right outline icon"></i>
            <div class="content">
              Ukuran Ikan
            </div>
          </div>
              <div class="item">
            <i class="caret square right outline icon"></i>
            <div class="content">
              Harga Ikan
            </div>
          </div>
              <div class="item">
            <i class="caret square right outline icon"></i>
            <div class="content">
              Stok Ikan
            </div>
          </div><br>
                <div style="text-align: center" class="ui segment">
                    <div class="ui buttons">
                      <button class="ui green button">Chart</button>
                      <div class="or"></div>
                      <button class="ui blue button">Beli</button>
                    </div>
                  </div>
          </div>  
        </div>
        </div>
          <div class="thirteen wide column">
        <div class="ui segment">
          <div class="ui list">
          <div class="item">
            <i class="caret square right outline icon"></i>
            <div class="content">
              Keterangan
            </div>
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