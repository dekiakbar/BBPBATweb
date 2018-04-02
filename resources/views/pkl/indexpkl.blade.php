<!DOCTYPE html> <html> <head>   <meta charset="utf-8">   <meta
name="description" content="">   <meta name="" content="">   <title>Daftar
Peserta Magang</title>   <meta name="csrf-token" content="{{csrf_token()}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/manual.css')}}">

</head>
<body>
	<div class="ui secondary pointing menu grid computer only blue">
		<div class="header item ">
    		Laravel Artikel
  		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Kategori</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="" class="item"><i class="icon plus"></i>Ikan</a>
			    <a href="" class="item"><i class="icon list"></i>kodok</a>
                <a href="" class="item"><i class="icon list"></i>Udang</a>
		  	</div>
		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Keranjang</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="" class="item"><i class="icon plus"></i>List Barang</a>
			    <a href="" class="item"><i class="icon list"></i>Pembayaran</a>
		  	</div>
		</div>
		<div class="right menu">
		  	<a href="" class="ui item animated fade button teal" onclick="event.preventDefault();document.getElementById('keluar').submit();">
		  		<div class="hidden content">
					<i class="sign out icon"></i>
				</div>
				<div class="visible content">
					Keluar    
				</div>
		  	</a>
		  	<form id="keluar" action="" method="POST" style="display: none;">
 
            </form>
		</div>
	</div>

	<div class="ui menu grid mobile only" style="margin-top: 0px;">
		<div class="header item">
    		Laravel Artikel
  		</div>
  		<div class="right menu">
  			<a class="ui item mobile only" onclick="tampil();"><i class="icon list blue"></i></a>
  		</div>
	</div>

	<div class="ui longer modal">
	  	<div class="header">Menu</div>
	  	<div class="content">
	  		<div class="ui grid center aligned">
		  		<div class="ui vertical menu">
		  			<div class="item">
				    	<div class="header">Kategori</div>
				    	<div class="menu">
				      		<a class="item">Ikan</a>
				      		<a class="item">Kodok</a>
                            <a class="item">Udang</a>
				    	</div>
				  	</div>
				  	<div class="item">
				    	<div class="header">Keranjang</div>
				    	<div class="menu">
				      		<a class="item">List Barang</a>
				      		<a class="item">Pembayaran</a>
				    	</div>
				  	</div>
		  		</div>
			</div>
		</div>
	</div>

    <h3 class="ui center aligned header" style="margin-bottom: 30px">DATA ANAK MAGANG DAN PKLAN</h3>
    <div class="ui column stackable grid container">
        <div class="column">
            
            <h4>Range</h4>
              <div class="ui form">
                <div class="three fields">
                  <div class="field">
                    <label>Mulai Magang</label>
                    <div class="ui calendar" id="rangestart">
                      <div class="ui input left icon">
                        <i class="calendar icon"></i>
                        <input type="text" placeholder="Mulai">
                      </div>
                    </div>
                  </div>
                  <div class="field">
                    <label>Akhir Magang</label>
                    <div class="ui calendar" id="rangeend">
                      <div class="ui input left icon">
                        <i class="calendar icon"></i>
                        <input type="text" placeholder="Akhir">
                      </div>
                    </div>
                  </div>
                    <div class="field">
                    <label>Download</label>
                    <div style="margin-bottom: 5px" class="ui small primary labeled icon button">
                <i class="download icon"></i>CSV</div>
                  </div>
                </div>
              </div>
                
            <table class="ui celled table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Nama Instansi</th>
                  <th>Judul kegiatan</th>
                  <th>Mulai Kegiatan</th>
                  <th>Akhir Kegiatan</th>
                  <th class="one wide column" >Opsi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datas as $data)
                  <tr>
                      <td>{{++$no}}</td>
                      <td>{{$data->nama_lengkap}}</td>
                      <td>{{$data->nama_instansi}}</td>
                      <td>{{$data->judul_kegiatan}}</td>
                      <td>{{$data->mulai}}</td>
                      <td>{{$data->selesai}}</td>
                      <td style="text-align: center">
                          <div class="mini ui buttons">
                            <a href="{{route('pkl.edit',$data->id)}}" class="ui green button">E</a>
                            <div class="or"></div>
                            <button class="ui red button">H</button>
                            <button style="margin-left: 5px" class="ui blue button">PDF</button>
                          
                          </div>
                          
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <div class="ui container center aligned">
              {{ $datas->appends(\Request::except('page'))->links('pagination.semantic-ui') }}
            </div>
        </div>
    </div>



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
    <script>
    $('#rangestart').calendar({
  type: 'date',
  endCalendar: $('#rangeend')
});
$('#rangeend').calendar({
  type: 'date',
  startCalendar: $('#rangestart')
});
    </script>
</body>
</html>