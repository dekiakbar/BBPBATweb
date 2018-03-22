@extends('admin.master')
@section('judul','Admin Perpus | Daftar Data Buku')

@section('isi')
	<div class="ui small modal">
		<div class="ui icon header">
			<i class="trash icon"></i>
			Hapus Data Buku
		</div>
		<div class="content right floated">
			<p>Data buku yang telah dihapus tidak bisa dikembalikan, Anda yakin ingin menghapus buku ini?</p>
		</div>
		<div class="actions">
			<div class="ui red inverted cancel inverted button tidak">
				<i class="remove icon"></i>
				Tidak
			</div>
			<div class="ui green ok inverted button tidak ya">
				<i class="checkmark icon"></i>
				Iya
			</div>
		</div>
	</div>

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
			    	<th class="center aligned">No</th>
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
	  					<td>{{++$no}}</td>
		      			<td>{{$buku->judul_buku}}</td>
		        		<td>{{$buku->pengarang}}</td>
		        		<td>{{$buku->kategori->nama_kategori}}</td>
		        		<td>{{$buku->tahun_terbit}}</td>
		        		<td>
			  				<div class="sixteen wide column center aligned">
			        			<a href="{{route('perpus.edit',encrypt($buku->id))}}" class="ui button teal"><i class="edit icon"></i> Edit</a>
			        			<a onclick="hapus()" id="hapus" data-slug="/admin/buku/{{ $buku->id }}" data-token="{{ csrf_token() }}" class="ui button red">
								    <i class="trash icon"></i> Hapus
								</a>
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