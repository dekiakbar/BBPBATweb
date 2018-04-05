<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>>
	<meta name="" content="">
	<title>Data Magang</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/manual.css') }}">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">  	

</head>
<body>

	<table class="ui celled table">
        <thead>
          <tr>
            <th>Nama Lengkap</th>
            <th>Nama Instansi</th>
            <th>Judul kegiatan</th>
            <th>Mulai Kegiatan</th>
            <th>Akhir Kegiatan</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                {{-- <td>{{$data->nama_lengkap}}</td>
                <td>{{$data->nama_instansi}}</td>
                <td>{{$data->judul_kegiatan}}</td>
                <td>{{$data->mulai}}</td>
                <td>{{$data->selesai}}</td> --}}
            </tr>
        </tbody>
    </table>
    
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/manual.js') }}"></script>
</body>
</html>
