@extends('admin.master')
@section('judul','Dashboard Admin')

@section('isi')    
<div class="ui stackable one column grid">
  <div style="background-color:; height: 200px" class="column">
    </div>
    <div style="background-color:; height: 350px" class="column">
        
        <div style="margin-left: 100px; margin-right: 100px; opacity: 0.7" class="ui raised segment">
            <p>BBPBAT SUKABUMI</p>
        </div>
        
        <div style="margin-left: 100px; margin-right: 100px; opacity: 0.7" class="ui raised segment">
            <div class="ui stackable center aligned four column grid">
                <div class="column">
                    <button class="ui icon button">
                        <i style="width: 150px; height: 100px" class="newspaper icon"><p>PORTAL</p></i>
                    </button>
                </div>
                <div class="column">
                    <button class="ui icon button">
                        <i style="width: 150px; height: 100px" class="globe icon"><p>BLOG</p></i>
                    </button>
                </div>
                <div class="column">
                    <button class="ui icon button">
                        <i style="width: 150px; height: 100px" class="book icon"><p>PERPUSTAKAAN</p></i>
                    </button>
                </div>
                <div class="column">
                    <button class="ui icon button">
                        <i style="width: 150px; height: 100px" class="shopping cart icon"><p>MARKETS</p></i>
                    </button>
                </div>
            </div>
        </div>
        <div style="margin-left: 100px; margin-right: 100px; opacity: 0.7" class="ui raised segment">
        <p>&copy;2018
				| Made With :
				<a target="_blank" href="https://Laravel.com">Laravel</a>
				<i class="large pink heartbeat icon"></i>
				<a target="_blank" href="https://Semantic-ui.com">Semantic</a>
			</p>
        </div>
        
                
    </div>
    <div style="background-color: ; height: 100px" class="column">
    </div>
        
</div>
@endsection