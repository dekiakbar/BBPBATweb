@extends('admin.master')
@section('judul','Tambah Petunjuk Teknis')
@section('isi')
	<div class="ui stackable grid">
		<div class="sixteen wide column center aligned">
		  	<div class="ui segment">
			    <h2 class="ui icon header">
			  		<i class="settings icon"></i>
			  		<div class="content">
			    		Admin Petunjuk Teknis
			    		<div class="sub header">Halaman Untuk Melihat </div>
			  		</div>
				</h2>
  			</div>
  		</div>


		<div class="ui segment">
			<div class="sixteen wide column">
				<div class="ui segment piled raised">
					<h1 class="ui center aligned grid" style="margin: 5px;">{{$detail->judul_juktek}}</h1>
					{!!$detail->isi!!}
				</div>
			</div>
		</div>
	</div>
@endsection