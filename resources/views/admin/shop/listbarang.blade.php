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
			<span class="text">Kategori</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="" class="item"><i class="icon plus"></i>Ikan</a>
			    <a href="" class="item"><i class="icon list"></i>kodok</a>
                <a href="" class="item"><i class="icon list"></i>Udang</a>
		  	</div>
		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Keranjang</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="" class="item"><i class="icon plus"></i>List Barang</a>
			    <a href="" class="item"><i class="icon list"></i>Pembayaran</a>
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



    <h3 class="ui center aligned header" style="margin-bottom: 30px">LIST BARANG</h3>
    <div class="ui column stackable grid container">
        <div class="column">
            <div style="margin-bottom: 5px" class="ui right floated small primary labeled icon button">
          <i class="archive icon"></i> Tambah Barang
        </div>
            <table class="ui celled table">
              <thead>
                <tr>
                <th>Nama Ikan</th>
                <th>Jenis Ikan</th>
                <th>Ukuran Ikan</th>
                <th>Harga Ikan</th>
                <th>Qty</th>
                <th>Keterangan</th>
                <th class="one wide column" >Opsi</th>
              </tr></thead>
              <tbody>
                <tr>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td style="text-align: center">
                        <div class="mini ui buttons">
                          <button class="ui green button">E</button>
                          <div class="or"></div>
                          <button class="ui red button">H</button>
                        </div>
                    </td>
                </tr>
              </tbody>
              <tfoot>
                <tr><th colspan="8">
                  <div class="ui right floated pagination menu">
                    <a class="icon item">
                      <i class="left chevron icon"></i>
                    </a>
                    <a class="item">1</a>
                    <a class="item">2</a>
                    <a class="item">3</a>
                    <a class="item">4</a>
                    <a class="icon item">
                      <i class="right chevron icon"></i>
                    </a>
                  </div>
                </th>
              </tr></tfoot>
            </table>
            
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