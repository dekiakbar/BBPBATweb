@extends('master')
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
			<div class="ui form">
	  <div class="two fields">
	    <div class="field">
	      <label>Judul Petunjuk</label>
	      <input placeholder="Isi Judul Buku" type="text">
	    </div>
	     <div class="field">
	    <label>Tanggal</label>
	    <input placeholder="Masukan Tanggal" type="text">
	    </div>
	      </div>
	
		<div class="ui form">
	    <div class="field">
	    	 <div class="ui stackable centered grid">
	    	 <div class="six wide column center aligned">
	      <label>Foto</label>
	      <input placeholder="Masukan Foto" type="text">
	     <input type="file" name="foto"> 
	    </div>
	</div>
	</div>

    <div class="field">
      <label>Masukan Petunjuk Teknis</label>
      <textarea></textarea>
      </div>
</div>

  </div>
	</div>

</div>
</div>

<br>

    	 <div class="ui stackable centered grid">
    	 <div class="six wide column center aligned">
	 <div class="ui button" tabindex="0">Simpan
  </div>
</div>
</div>
</div>
@endsection