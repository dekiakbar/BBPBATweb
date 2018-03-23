@extends('master')
@section('title','Perpustakaan BBPBAT')
@section('header','BBPBAT')
@section('isi')
	<div class="ui grid">
		<div class="three wide column">
		  	<div class="ui vertical menu">
		  		<div class="item header">Kategori</div>
		    	@foreach($kategoris as $kategori)
		    		<a href="{{url('/kategori',$kategori->nama_kategori)}}" class="item">{{$kategori->nama_kategori}}</a>
		    	@endforeach
		    </div>
		</div>
  		<div class="thirteen wide stretched column">
    		<div class="ui segment">
          		<div class="ui segment">
  					<div class="sixteen wide column" style="float: right;margin-bottom: 5px">
						<form method="post" action="{{route('perpus.cari')}}">
							{{csrf_field()}}
							<div class="ui fluid category search">
							  	<div class="ui icon input">
							    	<input name="cari" class="prompt" placeholder="Cari Buku..." type="text">
							    	<i class="search icon"></i>
							  	</div>
							</div>
						</form>
					</div>

  					<div class="ui container">
      					<table class="ui celled table">
						  	<thead>
							    <tr>
							    	<th>No</th>
							    	<th>Judul Buku</th>
							    	<th>Pengarang</th>
							    	<th>Kategori</th>
							    	<th>Tahun</th>  
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
									</tr>
								@endforeach
							</tbody>
						</table>

						<div class="ui container center aligned">
							{{ $bukus->appends(\Request::except('page'))->links('pagination.semantic-ui') }}
						</div>
					</div>
    			</div>
  			</div>
		</div>
	</div>
@endsection