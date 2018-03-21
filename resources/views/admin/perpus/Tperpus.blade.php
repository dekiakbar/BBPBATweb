@extends('admin.master')
@section('judul','Admin Perpustakaan | Tambah Data Buku')

@section('isi')
	<div class="ui stackable centered grid">
		<div class="sixteen wide column center aligned">
			<div class="ui segment">
			    <h2 class="ui tiny icon header">
			  		<i class="settings icon"></i>
			  		<div class="content">
			    		Admin Perpustakaan
			    		<div class="sub header">Halaman Untuk Tambah Data Buku </div>
			  		</div>
				</h2>
	  		</div>
	  	</div>
	</div>

	<br>

	<div class=" ui container">
		<div class="ui stackable centered grid">
    	 	<div class="six wide column center aligned">
    			<form class="ui form" method="post" action="{{route('kategori.tambah')}}">
    				{{csrf_field()}}
    				<div class="field">
    					<label>Tambah Kategori</label>
    					<input placeholder="Isi Kategori Buku Baru" name="nama_kategori" type="text">
    				</div>
    				<div class="field">
    					<button class="ui button blue" type="submit"> Simpan</button>
    				</div>
				</form>
			</div>
		</div>

		<div class="ui secondary segment">

			<form class="ui form">
			  	<div class="two fields">
				    <div class="field">
				      	<label>Judul Buku</label>
				      	<input placeholder="Isi Judul Buku" type="text">
				    </div>
				    <div class="field">
				      	<label>Kategori</label>
				       	<select class="ui fluid dropdown">
				       	 	<input name="Kategori" type="hidden">
				  		</select>
				  	</div>
				</div>

				<div class="ui form">
				  	<div class="two fields">
				    	<div class="field">
				      		<label>Pengarang</label>
				      		<input placeholder="Isi Nama Pengarang" type="text">
				    	</div>
				    	<div class="field">
				      		<label>Tahun</label>
				      		<input placeholder="Isi tahun Terbit" type="text">
				  		</div>
					</div>
				</div>
				
				<div class="ui center aligned grid">
					<button class="ui button blue" tabindex="0" style="margin: 10px;">Simpan</button>
				</div>
			</form>

		</div>
	</div>

<br>
	 
  
@endsection