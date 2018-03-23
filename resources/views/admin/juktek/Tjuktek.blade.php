@extends('admin.master')
@section('judul','Tambah Petunjuk Teknis')
@section('isi')
<div class="ui stackable centered grid">
	<div class="sixteen wide column center aligned">
		
		<div class="ui segment">
    		<h2 class="ui icon header">
  				<i class="settings icon"></i>
  				<div class="content">
    				Admin Petunjuk Teknis
    				<div class="sub header">Halaman Untuk Menginput Petunjuk Teknis </div>
  				</div>
			</h2>
  		</div>

	   	<div class="ui segment">
			<form class="ui form" action="{{route('juktek.simpan')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
	  			<div class="three fields">

	    			<div class="seven wide field">
	    			  	<label>Judul Petunjuk</label>
	    			  	<input placeholder="Judul Petunjuk Teknis" name="judul" type="text" id="dataSlug" onkeyup="buatSlug()">
	    			</div>

	    			<div class="seven wide field">
	    				<label>Slug</label>
	    		 		<input type="text" name="slug" id="slug" placeholder="Untuk URL Petunjuk Teknis">
	    			</div>

	    			<div class="two wide field">
	    				<input type="file" name="foto" id="labelinput" style="opacity: 0;overflow: hidden;margin-top: -28px;" />
						<label for="labelinput" class="ui huge green button">
							<i class="ui upload icon"></i> 
							Upload Foto
						</label>
	    			</div>
	      		</div>

	      		<div class="field">
	      			<label>Kutipan</label>
	      			<textarea name="kutipan"></textarea>
	      		</div>

	      		<div class="field">
      				<label>Masukan Petunjuk Teknis</label>
      				<textarea name="artikel"></textarea>
	      		</div>

				<div class="ui stackable centered grid">
    				<div class="six wide column center aligned">
	 					<button type="submit" class="ui button blue" tabindex="0">Simpan</button>
					</div>
				</div>

			</form>
		</div>

	</div>
</div>
@endsection