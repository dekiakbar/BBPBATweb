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
    		Super Admin Dashboard 
  		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Portal</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="{{ url('admin/juktek/tambah') }}" class="item"><i class="icon plus"></i>Tambah Juktek</a>
			    <a href="{{ url('admin/juktek') }}" class="item"><i class="icon list"></i>Daftar Juktek</a>
		  	</div>
		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Blog</span>
			<i class="dropdown icon"></i>
			<div class="menu">
				<a href="{{ url('admin/artikel/create') }}" class="item"><i class="icon plus"></i>Tambah Artikel</a>
			    <a href="{{ url('admin/artikel/') }}" class="item"><i class="icon list"></i>Daftar Artikel</a>
			    <a href="{{ url('admin/kategori/create') }}" class="item"><i class="icon plus"></i>Tambah Kategori</a>
			    <a href="{{ url('admin/kategori') }}" class="item"><i class="icon list"></i>Daftar Kategori</a>
			    <a href="{{ url('admin/tag/create') }}" class="item"><i class="icon plus"></i>Tambah Tag</a>
			    <a href="{{ url('admin/tag') }}" class="item"><i class="icon list"></i>Daftar Tag</a>
		  	</div>
		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Perpustakaan</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="{{ url('admin/perpus/buku/tambah') }}" class="item"><i class="icon plus"></i>Tambah Buku</a>
			    <a href="{{ url('admin/perpus/buku') }}" class="item"><i class="icon list"></i>Daftar Buku</a>
			    <a href="{{ url('admin/perpus/kategori/tambah') }}" class="item"><i class="icon plus"></i>Tambah Kategori</a>
		  	</div>
		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Markets</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="{{ url('admin/shop/produk/tambah') }}" class="item"><i class="icon plus"></i>Tambah Produk</a>
			    <a href="{{ url('admin/shop/produk') }}" class="item"><i class="icon list"></i>Daftar Produk</a>
			    <a href="{{ url('admin/shop/kategori/tambah') }}" class="item"><i class="icon plus"></i>Tambah Kategori</a>
			    <a href="{{ url('admin/shop/kategori') }}" class="item"><i class="icon list"></i>Daftar Kategori</a>
		  	</div>
		</div>
		<div class="right menu">
		  	<a href="{{ route('logout') }}" class="ui item animated fade button teal" onclick="event.preventDefault();document.getElementById('keluar').submit();">
		  		<div class="hidden content">
					<i class="sign out icon"></i>
				</div>
				<div class="visible content">
					Keluar    
				</div>
		  	</a>
		  	<form id="keluar" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
		</div>
	</div>

	<div class="ui menu grid mobile only" style="margin-top: 0px;">
		<div class="header item">
    		Super Admin Dashboard
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
				    	<div class="header">Portal</div>
				    	<div class="menu">
				      		<a href="{{ url('admin/juktek/tambah') }}" class="item">Tambah Juktek</a>
			    			<a href="{{ url('admin/juktek') }}" class="item">Daftar Juktek</a>
				    	</div>
				  	</div>
			  		<div class="item">
			    		<div class="header">Blog</div>
			    		<div class="menu">
			      			<a href="{{ url('admin/artikel/create') }}" class="item">Tambah Artikel</a>
			    			<a href="{{ url('admin/artikel/') }}" class="item">Daftar Artikel</a>
			    			<a href="{{ url('admin/kategori/create') }}" class="item">Tambah Kategori</a>
			    			<a href="{{ url('admin/kategori') }}" class="item">Daftar Kategori</a>
			    			<a href="{{ url('admin/tag/create') }}" class="item">Tambah Tag</a>
			    			<a href="{{ url('admin/tag') }}" class="item">Daftar Tag</a>
			    		</div>
			  		</div>
				  	<div class="item">
				    	<div class="header">Perpustakaan</div>
				    	<div class="menu">
				      		<a href="{{ url('admin/perpus/buku/tambah') }}" class="item">Tambah Buku</a>
			    			<a href="{{ url('admin/perpus/buku') }}" class="item">Daftar Buku</a>
			    			<a href="{{ url('admin/perpus/kategori/tambah') }}" class="item">Tambah Kategori</a>
				    	</div>
				  	</div>
				  	<div class="item">
				    	<div class="header">Perpustakaan</div>
				    	<div class="menu">
				    		<a href="{{ url('admin/shop/produk/tambah') }}" class="item">Tambah Produk</a>
			    			<a href="{{ url('admin/shop/produk') }}" class="item">Daftar Produk</a>
			    			<a href="{{ url('admin/shop/kategori/tambah') }}" class="item">Tambah Kategori</a>
			    			<a href="{{ url('admin/shop/kategori') }}" class="item">Daftar Kategori</a>
				    	</div>
				    </div>
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