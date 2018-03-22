@extends('master')
@section('title','Perpustakaan BBPBAT')
@section('header','BBPBAT')
@section('isi')
	<div class="ui grid">
		<div class="four wide column">
		  	<div class="ui vertical menu">
		    	<a class="item">
		    	  Home
		    	</a>
		    	<a class="item">
		    	  Kategori
		    	</a>
		    	<a class="item">
		    	  Companies
		    	</a>
		    	<a class="item">
		    	  Links
		    	</a>
		  	</div>
		</div>
  		<div class="twelve wide stretched column">
    		<div class="ui segment">
          		<div class="ui segment">
  					<div class="sixteen wide column" style="float: right;margin-bottom: 5px">
						<div class="ui fluid category search">
						  	<div class="ui icon input">
						    	<input class="prompt" placeholder="Cari Buku..." type="text">
						    	<i class="search icon"></i>
						  	</div>
						  	<div class="results"></div>
						</div>
					</div>

  					<div class="ui container">
      					<table class="ui celled table">
						  	<thead>
							    <tr>
							    	<th>Judul Buku</th>
							    	<th>Penerbit</th>
							    	<th>Kategori</th>
							    	<th>Tahun</th>  
							  	</tr>
							</thead>
						</table>
					</div>
    			</div>
  			</div>
		</div>
	</div>
@endsection