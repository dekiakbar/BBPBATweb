@extends('master')
@section('judul','Petunjuk Teknis')
@section('1','')
@section('2','')
@section('3','')
@section('4','active')
@section('isi')

	@foreach($datas as $data)
		<div class="ui segment">
			<div class="ui two column stackable grid">
				<div class="eight wide column">
					<div class="ui segment piled raised">
						{{$data->kutipan}}
						<br>
						<div class="column">
						  	<div class="ui button" tabindex="0">
						  		Download
							</div>
						</div>
					</div>
				</div>
				<div class="eight wide column">
					<div class="ui segment circular">
						<img class="ui medium image circular" src="{{asset('storage/juktek')}}/{{$data->foto}}">
					</div>
				</div>
			</div>
		</div>
	@endforeach

@endsection