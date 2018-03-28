@extends('admin.master')
@section('judul','Daftar Produk')

@section('isi')
	<div class="ui small modal">
		<div class="ui icon header">
			<i class="trash icon"></i>
			Hapus Data Produk
		</div>
		<div class="content right floated">
			<p>Data produk yang telah dihapus tidak bisa dikembalikan, Anda yakin ingin menghapus produk ini?</p>
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

    <h3 class="ui center aligned header" style="margin-bottom: 30px">Panel Produk</h3>
    <div class="ui column stackable grid container">
            <table class="ui celled table">
              <thead>
                <tr>
                <th>Nama Produk</th>
                <th>Stok</th>
                <th>Harga</th>
               	<th class="four wide column" >Opsi</th>
              </tr></thead>
              <tbody>
                @foreach($datas as $data)
                	<tr>
                    	<td>{{$data->nama_ikan}}</td>
                    	<td>{{$data->stok}}</td>
                    	<td>{{$data->harga}}</td>
                    	<td style="text-align: center">
                    	    <div class="mini ui buttons">
                    	      <a href="{{route('shop.edit',$data->slug)}}" class="ui green button">E</a>
                    	      <div class="or"></div>
                    	      <a onclick="hapus()" id="hapus" data-slug="{{route('shop.hapus',$data->slug)}}" data-token="{{ csrf_token() }}" class="ui red button">H</a>
                    	    </div>
                    	</td>
                	</tr>
                @endforeach
              </tbody>
            </table>
            
        </div>
    </div>

@endsection