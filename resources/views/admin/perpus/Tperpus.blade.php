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

	<div class=" ui container" style="margin-bottom: 62px;">
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

		<div class="ui divider"></div>

		<div class="ui secondary segment">

			<form class="ui form" action="{{route('perpus.simpan')}}" method="post">
				{{csrf_field()}}
			  	<div class="two fields">
				    <div class="field">
				      	<label>Judul Buku</label>
				      	<input placeholder="Isi Judul Buku" type="text" name="judul">
				    </div>
				    <div class="field">
				      	<label>Kategori</label>
				       	<select class="ui dropdown" name="kategori">
						  	@foreach($kategoris as $kategori)
						  		<option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
						  	@endforeach
						</select>
				  	</div>
				</div>

				<div class="ui form">
				  	<div class="two fields">
				    	<div class="field">
				      		<label>Pengarang</label>
				      		<input placeholder="Isi Nama Pengarang" type="text" name="pengarang">
				    	</div>
				    	<div class="field">
				      		<label>Tahun</label>
				      		<input placeholder="Isi tahun Terbit" type="text" name="tahun">
				  		</div>
					</div>
				</div>
				
				<div class="ui center aligned grid">
					<button class="ui button blue" tabindex="0" style="margin: 10px;">Simpan</button>
				</div>
			</form>

		</div>
	</div>
@endsection