<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="" content="">
	<title>Admin | Portal Input</title>
	<meta name="csrf-token" content="">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/manual.css')}}">

</head>
<body>
	<div class="ui secondary pointing menu grid computer only blue">
		<div class="header item ">
    		Laravel Artikel
  		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Artikel</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="" class="item"><i class="icon plus"></i>Tambah Artikel</a>
			    <a href="" class="item"><i class="icon list"></i>Daftar Artikel</a>
		  	</div>
		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Kategori</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="" class="item"><i class="icon plus"></i>Tambah Kategori</a>
			    <a href="" class="item"><i class="icon list"></i>Daftar Kategori</a>
		  	</div>
		</div>
		<div class="ui pointing dropdown link item">
			<span class="text">Tag</span>
			<i class="dropdown icon"></i>
			<div class="menu">
			    <a href="" class="item"><i class="icon plus"></i>Tambah Tag</a>
			    <a href="" class="item"><i class="icon list"></i>Daftar Tag</a>
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
				    	<div class="header">Artikel</div>
				    	<div class="menu">
				      		<a class="item">Tambah Artikel</a>
				      		<a class="item">Daftar Artikel</a>
				    	</div>
				  	</div>
			  		<div class="item">
			    		<div class="header">Kategori</div>
			    		<div class="menu">
			      			<a class="item">Tambah Kategori</a>
			      			<a class="item">Daftar Kategori</a>
			    		</div>
			  		</div>
				  	<div class="item">
				    	<div class="header">Tag</div>
				    	<div class="menu">
				      		<a class="item">Tambah Tag</a>
				      		<a class="item">Daftar Tag</a>
				    	</div>
				  	</div>
		  		</div>
			</div>
		</div>
	</div>
    <div style="margin-left: 100px; margin-right: 100px" class="column">
    <div class="ui top attached tabular menu">
      <a class="item" data-tab="first">Slider</a>
      <a class="item" data-tab="second">Media Sosial</a>
      <a class="item" data-tab="third">About</a>
    </div>
    <div class="ui bottom attached tab segment" data-tab="first">
    <h3 class="ui center aligned header" style="margin-bottom: 30px">INPUT IMAGE SLIDER</h3>
    <div class="ui one column stackable grid container">
    <div class="ui one column raised segment">
      <div class="column">
        <form class="ui form">
          <div class="two fields">
            <div class="field">
            <label>Slider 1</label>
            <input type="file" name=""><br><br>
            <input type="text" name="" placeholder="Masukan Judul Slide">
          </div>
            <div class="field">
            <label>Keterangan</label>
            <textarea rows="4"></textarea>
            </div>
            </div>
            <div class="ui divider"></div>
            <div class="two fields">
            <div class="field">
            <label>Slider 2</label>
            <input type="file" name=""><br><br>
            <input type="text" name="" placeholder="Masukan Judul Slide">
          </div>
            <div class="field">
            <label>Keterangan</label>
            <textarea rows="4"></textarea>
            </div>
            </div>
            <div class="ui divider"></div>
            <div class="two fields">
            <div class="field">
            <label>Slider 3</label>
            <input type="file" name=""><br><br>
            <input type="text" name="" placeholder="Masukan Judul Slide">
          </div>
            <div class="field">
            <label>Keterangan</label>
            <textarea rows="4"></textarea>
            </div>
            </div>
            <div class="ui divider"></div>
            <div class="two fields">
            <div class="field">
            <label>Slider 4</label>
            <input type="file" name=""><br><br>
            <input type="text" name="" placeholder="Masukan Judul Slide">
          </div>
            <div class="field">
            <label>Keterangan</label>
            <textarea rows="4"></textarea>
            </div>
            </div>
            <div class="ui divider"></div>
            <div class="two fields">
            <div class="field">
            <label>Slider 5</label>
            <input type="file" name=""><br><br>
            <input type="text" name="" placeholder="Masukan Judul Slide">
          </div>
            <div class="field">
            <label>Keterangan</label>
            <textarea rows="4"></textarea>
            </div>
            </div>
            <button class="green ui right floated button" type="submit">Submit</button>
        </form>
        </div>
        </div>
        <br><br><br>
    </div>
    </div>
        
    <div class="ui bottom attached tab segment active" data-tab="second">
    <h3 class="ui center aligned header" style="margin-bottom: 30px">INPUT MEDSOS ACCOUNT</h3>
    <div class="ui one column stackable grid container">
    <div class="ui one column raised segment">
      <div class="column">
        <form class="ui form" action="{{ route('admin.medsos',$medsos->id) }}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="patch">
          <div class="two fields">
            <div class="field">
            <label>Link Facebook</label>
            <input type="text" name="fb" placeholder="Facebook Account" value="{{$medsos->fb}}">
            </div>
            <div class="field">
            <label>Link Twitter</label>
            <input type="text" name="tweet" placeholder="Twitter Account" value="{{$medsos->tweet}}">
            </div>
          </div>
            <div class="two fields">
            <div class="field">
            <label>Link Google Plus</label>
            <input type="text" name="google" placeholder="google+ Account" value="{{$medsos->google}}">
            </div>
            <div class="field">
            <label>Link Instagram</label>
            <input type="text" name="ig" placeholder="Instagram Account" value="{{$medsos->ig}}">
            </div>
          </div>
            <button class="blue ui button" type="submit">Submit</button>
        </form>
        </div>
        </div>
    </div><br>
    </div>
        
    <div class="ui bottom attached tab segment" data-tab="third">
    <h3 class="ui center aligned header" style="margin-bottom: 30px">INPUT PAGE ABOUT</h3>
        <div class="ui one column stackable grid container">
            <div class="ui one column raised segment">
          <div class="column">
            <form class="ui form">
                <div class="field">
                <label>Visi</label>
                <textarea rows="7"></textarea>
                </div>
                <div class="two fields">
                <div style="width: 700px" class="field">
                <label>Misi</label>
                <textarea rows="7"></textarea>
                </div>
                <div class="field">
                <label>Uplode Gambar About</label>
                <input type="file" name="first-name" placeholder="Nama Ikan">
              </div>
              </div>
                <div class="field">
                <label>Tentang</label>
                <textarea rows="4"></textarea>
                </div>
                <button class="green ui button" type="submit">Submit</button>
            </form>
            </div>
            </div>
        </div>
        <br>
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
    <script>$('.menu .item').tab();</script>
</body>
</html>