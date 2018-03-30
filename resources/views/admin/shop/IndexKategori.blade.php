@extends('admin.master')
@section('judul','Daftar Kategori Produk')

@section('isi')
	<div class="ui small modal">
		<div class="ui icon header">
			<i class="trash icon"></i>
			Hapus Data Kategori Produk
		</div>
		<div class="content right floated">
			<p>Data kategori produk yang telah dihapus tidak bisa dikembalikan, Anda yakin ingin menghapus kategori produk ini?</p>
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

    <h3 class="ui center aligned header" style="margin-bottom: 30px">Panel Kategori Produk</h3>
    <div class="ui column stackable grid container">
            <table class="ui celled table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kategori</th>
               	  <th class="four wide column" >Opsi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datas as $data)
                	<tr>
                      <td>{{++$no}}</td>
                    	<td>{{$data->nama_kategori}}</td>
                    	<td style="text-align: center">
                    	   <a onclick="hapus()" id="hapus" data-slug="{{route('Kshop.hapus',$data->id)}}" data-token="{{ csrf_token() }}" class="ui red button">Hapus</a>
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

@endsection