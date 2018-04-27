<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="" content="">
	<title>Market BBPBAT</title>
	<meta name="csrf-token" content="">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/manual.css')}}">

</head>
<body style="background-color: lightblue">

	<div class="ui secondary pointing menu grid computer only blue">
		<div class="header item ">
    		Market BBPBAT
  		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Kategori</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    @foreach($kategoris as $k)
			    	<a href="{{route('shop.kategori',$k->id)}}" class="item"><i class="icon plus"></i>{{$k->nama_kategori}}</a>
			    @endforeach		  	
			</div>
		</div>
		
		<a href="{{ route('landing') }}" class="item">Home</a>
	      <a href="{{ route('perpus') }}" class="item">Perpustakaan</a>
	      <a href="{{ route('blog') }}" class="item">Berita</a>
	      <a href="{{ route('shop') }}" class="item">Market</a>
	      <a href="{{ route('pkl') }}" class="item">E-layanan</a>
	</div>


    <h3 class="ui center aligned header" style="margin-bottom: 30px">BBPBAT MARKET</h3>
    <div style="margin-left: 70px" class="ui stackable column grid">
      <div style="text-align: center" class="fifteen wide column">
        {{-- <img style="width: 1700px; height: 400px" class="ui massive rounded image" src="jpg/1.jpg"> --}}
        </div>
        <div style="text-align: center" class="fifteen wide column">
            <div class="ui blue three item inverted menu">
             @foreach($kats as $kat)
             	<a class="item">{{$kat->nama_kategori}}</a>
             @endforeach
            </div>
        </div>
        <div class="fifteen wide column">

	        <div class="ui segment">
	        	<div class="ui cards">
		          	@foreach($datas as $data)
		          		<div class="ui card">
			              	<div class="content">
			                  	<i class="comment icon"></i>
			                	<a>{{$data->nama_ikan}}</a>
			              	</div>
			              	<img class="ui image" src="{{asset('storage/shop')}}/{{$data->foto}}"> 
			              	<div class="content">
			              	  	<span class="right floated">
			              	  		<label>Stok :</label>
			              	    	<i class="gift icon"></i>
			              	    	<a>{{$data->stok}}</a>
			              	  	</span>
			              	    <i class="chart icon"></i>
			              	  	<a>Rp.{{$data->harga}}</a>
			              	  	<div class="ui divider"></div>
			              	  	<p>{{$data->keterangan}}</p>
			              	</div>
			               	<div class="content">
			               	 	<a href="{{ route('shop.tampil.beli',$data->id) }}" class="ui icon button">
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

	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/manual.js')}}"></script>
</body>
</html>