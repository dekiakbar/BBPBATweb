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
        <form class="ui form">
          <div class="two fields">
            <div class="field">
            <label>Kategori</label>
            <input type="text" name="first-name" placeholder="Masukan Ketegori">
          </div>
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form>
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