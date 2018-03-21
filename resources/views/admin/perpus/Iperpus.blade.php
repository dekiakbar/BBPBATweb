@extends('admin.master')
@section('judul','Admin Perpus | Daftar Data Buku')

@section('isi')
	<div class="ui stackable centered grid">
	  	<div class="sixteen wide column center aligned">
	      	<div class="ui segment">
				<h2 class="ui tiny icon header">
				  	<i class="settings icon"></i>
				  	<div class="content">
				    	Admin Perpustakaan
				    	<div class="sub header">Halaman Untuk Melihat Buku </div>
				  	</div>
				</h2>
	  		</div>
	  	</div>
	</div>

	<br>

	<div class="ui container">
	    <table class="ui celled table">
			<thead>
			    <tr>
			    	<th class="center aligned">Judul Buku</th>
			    	<th class="center aligned">Penerbit</th>
			    	<th class="center aligned">Kategori</th>
			    	<th class="center aligned">Tahun</th>
			    	<th class="center aligned">Opsi</th>
			  	</tr>
			</thead>
	  		
	  		<tbody>
	  			@foreach($bukus as $buku)
	  				<tr>
		      			<td>{{$buku->judul_buku}}</td>
		        		<td>{{$buku->pengarang}}</td>
		        		<td>{{$buku->kategori->first()->nama_kategori}}</td>
		        		<td>{{$buku->tahun_terbit}}</td>
		        		<td>
			  				<div class="sixteen wide column center aligned">
			        			<a class="ui button teal"><i class="edit icon"></i> Edit</a>
			        			<a class="ui button blue"><i class="zoom icon"></i> Lihat</a>
			        			<a class="ui button red"><i class="trash icon"></i> Hapus</a>
		      				</div>
		      			</td>
		      		</tr>
	  			@endforeach
	      	</tbody>
		</table>

		<div class="ui container center aligned">
			{{ $bukus->appends(\Request::except('page'))->links('pagination.semantic-ui') }}
		</div>
	</div>
@endsection