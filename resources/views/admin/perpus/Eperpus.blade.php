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

		<div class="ui divider"></div>

		<div class="ui secondary segment">

			<form class="ui form" action="{{route('perpus.update',encrypt($edit->id))}}" method="post">
				{{csrf_field()}}
				<input type="hidden" name="_method" value="PATCH">
			  	<div class="two fields">
				    <div class="field">
				      	<label>Judul Buku</label>
				      	<input placeholder="Isi Judul Buku" type="text" name="judul" value="{{$edit->judul_buku}}">
				    </div>
				    <div class="field">
				      	<label>Kategori</label>
				       	<select class="ui dropdown" name="kategori">
						  	@foreach($kategoris as $kategori)
						  		@if($kategori->id == $edit->kategori->id)
						  			<option value="{{$kategori->id}}" selected>{{$kategori->nama_kategori}}</option>
						  		@endif
						  			<option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
						  	@endforeach
						</select>
				  	</div>
				</div>

				<div class="ui form">
				  	<div class="two fields">
				    	<div class="field">
				      		<label>Pengarang</label>
				      		<input placeholder="Isi Nama Pengarang" type="text" name="pengarang" value="{{$edit->pengarang}}">
				    	</div>
				    	<div class="field">
				      		<label>Tahun</label>
				      		<input placeholder="Isi tahun Terbit" type="text" name="tahun" value="{{$edit->tahun_terbit}}">
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