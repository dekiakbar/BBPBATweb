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
				<div class="ten wide column">
					<div class="ui segment piled raised">
						<h5>{{$data->judul_juktek}}</h5>
						<br>
						{{$data->kutipan}}
						<br>
						<div class="column">
						  	<a href="{{asset('storage/juktek')}}/{{$data->file}}" class="ui button" tabindex="0">
						  		Download
							</a>
						</div>
					</div>
				</div>
				<div class="six wide column">
					<div class="ui segment circular">
						<img class="ui medium image circular" src="{{asset('storage/juktek')}}/{{$data->foto}}">
					</div>
				</div>
			</div>
		</div>
		<div class="ui container center aligned">
			{{ $datas->appends(\Request::except('page'))->links('pagination.semantic-ui') }}
		</div>
	@endforeach

@endsection