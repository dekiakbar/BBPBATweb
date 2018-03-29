<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="" content="">
	<title>Market BBPBAT</title>
	<meta name="csrf-token" content="">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/manual.css'">

</head>
<body>
	<div class="ui secondary pointing menu grid computer only blue">
		<div class="header item ">
    		Market BBPBAT
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


    <h3 class="ui center aligned header" style="margin-bottom: 30px">BBPBAT MARKET</h3>
    <div style="margin-left: 70px" class="ui stackable column grid">
      <div style="text-align: center" class="fifteen wide column">
        <img style="width: 1700px; height: 400px" class="ui massive rounded image" src="jpg/1.jpg">
        </div>
        <div style="text-align: center" class="fifteen wide column">
            <div class="ui blue three item inverted menu">
             @foreach($kats as $kat)
             	<a class="item">{{$kat->nama_kategori}}</a>
             @endforeach
            </div>
        </div>
        <div style="margin-left: 43px" class="fifteen wide column">

	        <div class="ui segment">
	        	<div class="ui cards">
		          	@foreach($datas as $data)
		          		<div class="ui card">
			              	<div class="content">
			                  	<i class="comment icon"></i>
			                	<a>{{$data->nama_ikan}}</a>
			                	<br>
			                	<br>
			                	<img class="ui small image" src="{{asset('storage/shop')}}/{{$data->foto}}"> 
			              	</div>
			              	<div class="content">
			              	  	<span class="right floated">
			              	    	<i class="gift icon"></i>
			              	    	<a>{{$data->stok}}</a>
			              	  	</span>
			              	    <i class="dollar sign icon"></i>
			              	  	<a>{{$data->harga}}</a>
			              	</div>
			               	<div class="content">
			               	 	<a class="ui icon button">
			               	   		<i class="shopping cart icon"></i>
			               	 	</a>
			              	</div>
			            </div>
		          	@endforeach
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