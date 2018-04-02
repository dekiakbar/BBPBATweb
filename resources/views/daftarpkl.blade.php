<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="" content="">
	<title>template admin nyah</title>
	<meta name="csrf-token" content="">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/manual.css')}}">

</head>
<body>
	<div class="ui secondary pointing menu grid computer only blue">
		<div class="header item ">
    		Laravel Artikel
  		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Artikel</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="" class="item"><i class="icon plus"></i>Tambah Artikel</a>
			    <a href="" class="item"><i class="icon list"></i>Daftar Artikel</a>
		  	</div>
		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Kategori</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="" class="item"><i class="icon plus"></i>Tambah Kategori</a>
			    <a href="" class="item"><i class="icon list"></i>Daftar Kategori</a>
		  	</div>
		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Tag</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="" class="item"><i class="icon plus"></i>Tambah Tag</a>
			    <a href="" class="item"><i class="icon list"></i>Daftar Tag</a>
		  	</div>
		</div>
		<div class="right menu">
		  	<a href="" class="ui item animated fade button teal" onclick="event.preventDefault();document.getElementById('keluar').submit();">
		  		<div class="hidden content">
					<i class="sign out icon"></i>
				</div>
				<div class="visible content">
					Keluar    
				</div>
		  	</a>
		  	<form id="keluar" action="" method="POST" style="display: none;">
 
            </form>
		</div>
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
				    	<div class="header">Artikel</div>
				    	<div class="menu">
				      		<a class="item">Tambah Artikel</a>
				      		<a class="item">Daftar Artikel</a>
				    	</div>
				  	</div>
			  		<div class="item">
			    		<div class="header">Kategori</div>
			    		<div class="menu">
			      			<a class="item">Tambah Kategori</a>
			      			<a class="item">Daftar Kategori</a>
			    		</div>
			  		</div>
				  	<div class="item">
				    	<div class="header">Tag</div>
				    	<div class="menu">
				      		<a class="item">Tambah Tag</a>
				      		<a class="item">Daftar Tag</a>
				    	</div>
				  	</div>
		  		</div>
			</div>
		</div>
	</div>


    <h3 class="ui center aligned header" style="margin-bottom: 30px">BIODATA DAN PERNYATAAN PESERTA DISEMINASI DI BALAI BESAR PERIKANAN BUDIDAYA AIR TAWAR SUKABUMI TAHUN 2018</h3>
    <div class="ui one column stackable grid container">
        <div class="ui one column raised segment">
      <div class="column">
        <form class="ui form">
          <div class="two fields">
            <div class="field">
            <label>Nama Kegiatan</label>
            <div class="ui selection dropdown">
              <input type="hidden" name="">
              <i class="dropdown icon"></i>
              <div class="default text">Pilih Kegiatan</div>
              <div class="menu">
                <div class="item" data-value="Magang">Magang</div>
                <div class="item" data-value="Magang Khusus">Magang Khusus</div>
                <div class="item" data-value="PKL/KPA">PKL/KPA</div>
                <div class="item" data-value="PSG">PSG</div>
                <div class="item" data-value="Penelitian">Penelitian</div>
              </div>
            </div>
          </div>
            <div class="field">
            <label>Nama Lengkap</label>
            <input type="text" name="" placeholder="Masukan Nama Lengkap">
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Email</label>
            <input type="text" name="" placeholder="Masukan Alamat Email">
          </div>
            <div class="field">
            <label>Tempat/tgl. Lahir</label>
            <input type="text" name="" placeholder="Tempat & Tanggal Lahir">
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Alamat Rumah</label>
            <input type="text" name="" placeholder="Masukan Alamat Lengkap">
          </div>
            <div class="field">
            <label>No. Telp/Hp</label>
            <input type="text" name="" placeholder="Masukan No. Telp/Hp">
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Nama Instansi/P.Tinggi/Sekolah</label>
            <input type="text" name="" placeholder="Masukan Nama Lengkap Instansi">
          </div>
            <div class="field">
            <label>Alamat Instansi/P.Tinggi/Sekolah</label>
            <input type="text" name="" placeholder="Masukan Alamat Lengkap Instansi">
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Alamat di Sukabumi</label>
            <input type="text" name="" placeholder="Masukan Alamat Anda di Sukabumi">
          </div>
            <div class="field">
            <label>Judul Kegiatan</label>
            <input type="text" name="" placeholder="Masukan Judul Kegiatan">
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Mulai Kegiatan</label>
            <input type="text" name="" placeholder="">
          </div>
            <div class="field">
            <label>Akhir Kegiatan</label>
            <input type="text" name="" placeholder="">
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