<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="" content="">
	<title>@yield('judul')</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/manual.css') }}">

</head>
<body>
	<div class="ui secondary pointing menu grid computer only blue">
		<div class="header item ">
    		@yield('header') 
  		</div>
  		<a class="item">
  			Website
  		</a>
  		<a href="{{url('http://perpus.bbpbat.go.id:8000')}}" class="active item">
			Perpustakaan
		</a>
		<a href="{{url('http://blog.bbpbat.go.id:8000')}}" class="item">
		 	Blog
		</a>
		<a class="item">
			Market
		</a>
	</div>

	<div class="ui menu grid mobile only" style="margin-top: 0px;">
		<div class="header item">
    		BBPBAT
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
		  			<a class="item">
			  			Website
			  		</a>
			  		<a href="{{url('http://perpus.bbpbat.go.id:8000')}}" class="active item">
						Perpustakaan
					</a>
					<a href="{{url('http://blog.bbpbat.go.id:8000')}}" class="item">
					 	Blog
					</a>
					<a class="item">
						Market
					</a>
		  		</div>
			</div>
		</div>
	</div>

	@yield('isi')

	<footer style="margin-top: 10px;">
		<div class="ui segment center aligned blue">
			<p>&copy;{!! date('Y') !!} 
				| Made With :
				<a target="_blank" href="https://Laravel.com">Laravel</a>
				<i class="large pink heartbeat icon"></i>
				<a target="_blank" href="https://Semantic-ui.com">Semantic</a>
			</p>
		</div>
	</footer>

	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
	<script type="text/javascript">
		var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
	</script>
	<script type="text/javascript">
		$('textarea[name=artikel]').ckeditor({
    		height: 500,
    		filebrowserImageBrowseUrl: route_prefix + '?type=Images',
    		filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
    		filebrowserBrowseUrl: route_prefix + '?type=Files',
    		filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
		});
	</script>
	<script type="text/javascript" src="{{ asset('js/manual.js') }}"></script>
</body>
</html>