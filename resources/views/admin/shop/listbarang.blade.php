@extends('admin.master')
@section('judul','Request Pesanan')

@section('isi')

    <h3 class="ui center aligned header" style="margin-bottom: 30px">LIST BARANG</h3>
    <div class="ui column stackable grid container">
        <div class="column">
            <div style="margin-bottom: 5px" class="ui right floated small primary labeled icon button">
          <i class="archive icon"></i> Tambah Barang
        </div>
            <table class="ui celled table">
              	<thead>
                	<tr>
                		<th>Nama</th>
                		<th>Handphone</th>
                		<th>Email</th>
                		<th>Produk</th>
                		<th>Harga Produk</th>
                		<th>Qty</th>
                		<th>Status</th>
                	<th class="one wide column" >Opsi</th>
              </tr>
          		</thead>
              <tbody>
                @foreach($datas as $d)
                	<tr>
	                    <td>{{$d->nama}}</td>
	                    <td>{{$d->hp}}</td>
	                    <td>{{$d->email}}</td>
	                    <td>{{$d->shop->nama_ikan}}</td>
	                    <td>{{$d->shop->harga}}</td>
	                    <td>{{$d->jumlah}}</td>
	                    <td>
	                    	@if($d->status == true)
	                    		<div class="ui label green">Verif</div>
	                    	@else
	                    		<div class="ui label red">Pending</div>
	                    	@endif
	                    </td>
	                    <td style="text-align: center">
	                        <div class="mini ui buttons">
	                          <a onclick="event.preventDefault();document.getElementById('acc').submit();" class="ui green button"><i class="checkmark icon"></i></a>
	                          <form action="" method="post" style="display: none;" id="acc">
	                          	{{csrf_field()}}
	                          </form>
	                          <div class="or"></div>
	                          <a href="" class="ui red button"><i class="trash icon"></i></a>
	                          <form action="" method="" style="display: none;">
	                          	
	                          </form>
	                        </div>
	                    </td>
	                </tr>
                @endforeach
              </tbody>
         
            </table>
            
        </div>
    </div>
@endsection