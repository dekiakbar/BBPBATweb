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
<body style="background-color: lightblue">
	<div class="ui secondary pointing menu grid computer only blue">
		<div class="header item ">
    		Market BBPBAT
  		</div>
	</div>

	<div class="ui longer modal">
	  	<div class="header">Menu</div>
	  	<div class="content">
	  		<div class="ui grid center aligned">
		  		<div class="ui vertical menu">
		  			<div class="item">
				    	<a href="{{ route('landing') }}" class="item">Home</a>
	      <a href="{{ route('perpus') }}" class="item">Perpustakaan</a>
	      <a href="{{ route('blog') }}" class="item">Berita</a>
	      <a href="{{ route('shop') }}" class="item">Market</a>
	      <a href="{{ route('pkl') }}" class="item">E-layanan</a>
				  	</div>
		  		</div>
			</div>
		</div>
	</div>


    <h3 class="ui center aligned header" style="margin-bottom: 30px">LIST BARANG</h3>
    <div class="ui column stackable grid container">
        <div class="column">
            <a style="margin-bottom: 5px" class="ui right floated small primary labeled icon button">
          		<i class="archive icon"></i>Tambah Barang
        	</a>
            <table class="ui celled table">
              <thead>
	                <tr>
	                <th>Nama Ikan</th>
	                <th>Ukuran Ikan</th>
	                <th>Harga Ikan</th>
	                <th>Qty</th>
	                <th>Keterangan</th>
	                <th>Total</th>
	                <th>Opsi</th>
	              </tr>
	          </thead>
              <tbody>
                @foreach($datas as $d)
                	<tr>
	                    <td>{{$d->shop->nama_ikan}}</td>
	                    <td>{{$d->shop->ukuran}}</td>
	                    <td>{{$d->shop->harga}}</td>
	                    <td>{{$d->jumlah}}</td>
	                    <td>{{$d->shop->keterangan}}</td>
	                    <td>Rp.{{$d->jumlah*$d->shop->harga}}</td>
	                	<td>
	                		<a onclick="event.preventDefault();document.getElementById('delpesan').submit();" class="ui red button"><i class="trash icon"></i></a>
	                          <form id="delpesan" action="{{ route('shop.delete.keranjang',$d->id) }}" method="POST" style="display: none;">
	                          	<input type="hidden" name="id" value="{{$d->id}}">
	                          	{{csrf_field()}}
	                          	{{method_field('DELETE')}}
	                          </form>
	                	</td>
	                </tr>
                @endforeach
              </tbody>
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

	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/manual.js')}}"></script>
</body>
</html>