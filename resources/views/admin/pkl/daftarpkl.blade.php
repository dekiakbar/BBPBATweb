<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="" content="">
	<title>Formulir Pendaftaran Magang</title>
	<meta name="csrf-token" content="">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/manual.css')}}">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
</head>
<body style="background-color: lightblue">
	<div class="ui secondary pointing menu grid computer only blue" style="background-color: white">
		 <a href="{{ route('landing') }}" class="item active">Home</a>
        <a href="{{ route('perpus') }}" class="item active">Perpustakaan</a>
        <a href="{{ route('blog') }}" class="item active">Berita</a>
        <a href="{{ route('shop') }}" class="item active">Market</a>
        <a href="{{ route('pkl') }}" class="item active">E-layanan</a>
	</div>

    <h3 class="ui center aligned header" style="margin-bottom: 30px">BIODATA DAN PERNYATAAN PESERTA DISEMINASI DI BALAI BESAR PERIKANAN BUDIDAYA AIR TAWAR SUKABUMI TAHUN 2018</h3>
    <div class="ui one column stackable grid container">
        <div class="ui one column raised segment">
      <div class="column">
        <form class="ui form" method="post" action="{{route('pkl.tambah')}}">
        	{{csrf_field()}}
          <div class="two fields">
            <div class="field">
            <label>Nama Kegiatan</label>
            <div class="ui selection dropdown">
              <input type="hidden" name="nama_kegiatan">
              <i class="dropdown icon"></i>
              <div class="default text">Pilih Kegiatan</div>
              <div class="menu">
                <div class="item" data-value="Magang">Magang</div>
                <div class="item" data-value="Magang Khusus">Magang Khusus</div>
                <div class="item" data-value="PKL/KPA">PKL/KPA</div>
                <div class="item" data-value="PSG">PSG</div>
                <div class="item" data-value="Penelitian">Penelitian</div>
              </div>
            </div>
          </div>
            <div class="field">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukan Nama Lengkap">
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Email</label>
            <input type="text" name="email" placeholder="Masukan Alamat Email">
          </div>
            <div class="field">
            <label>Tempat/tgl. Lahir</label>
            <input type="text" name="ttl" placeholder="Tempat & Tanggal Lahir">
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Alamat Rumah</label>
            <input type="text" name="alamat_rumah" placeholder="Masukan Alamat Lengkap">
          </div>
            <div class="field">
            <label>No. Telp/Hp</label>
            <input type="text" name="no" placeholder="Masukan No. Telp/Hp">
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Nama Instansi/P.Tinggi/Sekolah</label>
            <input type="text" name="instansi" placeholder="Masukan Nama Lengkap Instansi">
          </div>
            <div class="field">
            <label>Alamat Instansi/P.Tinggi/Sekolah</label>
            <input type="text" name="alamat_instansi" placeholder="Masukan Alamat Lengkap Instansi">
          </div>
            </div>
            <div class="two fields">
            <div class="field">
            <label>Alamat di Sukabumi</label>
            <input type="text" name="alamat_tinggal" placeholder="Masukan Alamat Anda di Sukabumi">
          </div>
            <div class="field">
            <label>Judul Kegiatan</label>
            <input type="text" name="judul_kegiatan" placeholder="Masukan Judul Kegiatan">
          </div>
            </div>
            <div class="three fields">
            <div class="field">
            <label>Mulai Kegiatan</label>
            <input type="text" name="mulai" placeholder="" id="mulai">
          </div>
            <div class="field">
            <label>Akhir Kegiatan</label>
            <input type="text" name="selesai" placeholder="" id="selesai">
          </div>
          <div class="field">
            <label>Golongan Darah</label>
            <div class="ui selection dropdown">
              <input type="hidden" name="golongan">
              <i class="dropdown icon"></i>
              <div class="default text">Golongan Darah</div>
              <div class="menu">
                <div class="item" data-value="A">A</div>
                <div class="item" data-value="AB">B</div>
                <div class="item" data-value="AB">AB</div>
                <div class="item" data-value="O">O</div>
              </div>
            </div>
          </div>
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form>
        </div>
        </div>
    </div>
    <br>

	<footer style="margin-top: 30px;">
		<div class="ui segment center aligned blue">
			<p>&copy;2018
				| Made With :
				<a target="_blank" href="https://Laravel.com">Laravel</a>
				<i class="large pink heartbeat icon"></i>
				<a target="_blank" href="https://Semantic-ui.com">Semantic</a>
			</p>
		</div>
	</footer>

	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/manual.js')}}"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script type="text/javascript">
  	$( function() {
    	$("#mulai").datepicker();
  	});

  	$( function() {
    	$("#selesai").datepicker();
  	});
  	</script>
</body>
</html>