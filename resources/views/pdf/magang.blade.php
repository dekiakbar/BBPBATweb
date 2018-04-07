<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="" content="">
	<title>Data Magang</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <style type="text/css">
        table {
            width: 100%;
            background: $white;
            margin: 1em 0em;
            border: 1px solid rgba(34, 36, 38, 0.15);
            border-radius: 0.28571429rem;
            text-align: left;
            color: $font-color;
            border-collapse: separate;
            border-spacing: 0px;
        }
        
        th {
            cursor: auto;
            background: #F9FAFB;
            text-align: inherit;
            color: $font-color;
            padding: 0.92857143em 0.78571429em;
            vertical-align: inherit;
            font-style: none;
            font-weight: bold;
            text-transform: none;
            border-bottom: 1px solid rgba(34, 36, 38, 0.1);
            border-left: none;
        }

        td {
            cursor: auto;
            border-top: 1px solid rgba(34, 36, 38, 0.15);
            background: #F9FAFB;
            text-align: center;
            color: $font-color;
            padding: 0.78571429em 0.78571429em;
            vertical-align: middle;
            font-style: normal;
            font-weight: normal;
            text-transform: none;
        }

    </style>
<body>

	<table>
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
                <td>{{$data->nama_lengkap}}</td>
                <td>{{$data->nama_instansi}}</td>
                <td>{{$data->judul_kegiatan}}</td>
                <td>{{$data->mulai}}</td>
                <td>{{$data->selesai}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
