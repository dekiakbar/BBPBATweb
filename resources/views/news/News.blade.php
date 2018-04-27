<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="" content="">
	<title>News</title>
	<meta name="csrf-token" content="">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/manual.css">

</head>
<body>
	<div class="ui secondary pointing menu grid computer only blue">
		 <a href="{{ route('landing') }}" class="item">Home</a>
	      <a href="{{ route('perpus') }}" class="item">Perpustakaan</a>
	      <a href="{{ route('blog') }}" class="item">Berita</a>
	      <a href="{{ route('shop') }}" class="item">Market</a>
	      <a href="{{ route('pkl') }}" class="item">E-layanan</a>
	</div>
	<br>
<div class="ui stackable centered grid">
<!-- <div class="ui blue segment"> -->
     <h1>News</h1>
<!-- </div> -->
</div>
<br>
<br>
<div class="ui container">
	<div class="ui two column stackable grid">

	@foreach($beritas as $b)
		<div class="eight wide column">
			<div class="ui segment piled raised">
				<h2>{{$b->judul}}</h2>
					{{$b->deskripsi}}
						 <br>
					  <div class="column">
					 <div class="ui button" tabindex="0">
					  <a class="ui button blue" href="{{ asset('storage/news') }}/{{$b->file}}">Download</a>
					</div>
			  </div>
			</div>
		</div>
	@endforeach

	</div>
	<br>
	<br>
	<div class="ui container center aligned">
		{{ $beritas->appends(\Request::except('page'))->links('pagination.semantic-ui') }}
	</div>
</div>


	<footer style="margin-top: 10px;">
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