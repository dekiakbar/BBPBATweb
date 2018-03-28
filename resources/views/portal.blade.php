<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="" content="">
	<title>Portal</title>
	<meta name="csrf-token" content="">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/manual.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>

</head>
<body>

	<div class="ui modal coba">
  <i class="close icon"></i>
  <div class="image content">
    <div class="ui medium image">
      <img src="images/7.jpeg">
    </div>
    <div class="description">
      <div class="ui header">About</div>
      
<div class="ui segment">
<div class="ui two column stackable grid">
	<div class="eight wide column">
		<div class="ui raised piled segment ">
			<h1 class="ui center aligned grid" style="margin: 5px;">VISI</h1>
			
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
	</div>

	<div class="eight wide column">
		<div class="ui segment raised piled">
			<h1 class="ui center aligned grid" style="margin: 5px;">MISI</h1>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		  </div>
	</div>
</div>
</div>

<div class="ui segment">
	<div class="sixteen wide column">
		<div class="ui segment piled raised">
		<h1 class="ui center aligned grid" style="margin: 5px;">Tentang</h1>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  		</div>
	</div>
</div>
</div>
      </div>
  </div>
  </div>
</div>

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

<div class="w3-content w3-display-container" style="max-width: 100% !important; max-height: 75% !important;">
  <img class="mySlides" src="images/1.jpg" style="width:100% !important">
  <img class="mySlides" src="images/2.jpg" style="width:100%">
  <img class="mySlides" src="images/1.jpg" style="width:100%">
  <img class="mySlides" src="images/2.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
 



<div class="ui segment">
    	<h3>News</h3>
<div class="ui five column grid">
  <div class="column">
    <div class="ui segment">
      <div class="ui card">
  <div class="content">
    <div class="center aligned header">Jenny Hess</div>
    <div class="center aligned description">
      <p>Jenny is a student studying Media Management at the New School</p>
    </div>
  </div>
  <div class="extra content">
    <div class="center aligned author">
      <img class="ui avatar image" src="http://semantic-ui.com/images/avatar/small/jenny.jpg"> Jenny
    </div>
  </div>
</div>
    </div>
  </div>

  <div class="column">
    <div class="ui segment">
      <div class="ui card">
  <div class="content">
    <div class="center aligned header">Jenny Hess</div>
    <div class="center aligned description">
      <p>Jenny is a student studying Media Management at the New School</p>
    </div>
  </div>
  <div class="extra content">
    <div class="center aligned author">
      <img class="ui avatar image" src="http://semantic-ui.com/images/avatar/small/jenny.jpg"> Jenny
    </div>
  </div>
</div>
    </div>
  </div>

  <div class="column">
    <div class="ui segment">
      <div class="ui card">
  <div class="content">
    <div class="center aligned header">Jenny Hess</div>
    <div class="center aligned description">
      <p>Jenny is a student studying Media Management at the New School</p>
    </div>
  </div>
  <div class="extra content">
    <div class="center aligned author">
      <img class="ui avatar image" src="http://semantic-ui.com/images/avatar/small/jenny.jpg"> Jenny
    </div>
  </div>
</div>
    </div>
  </div>

<div class="column">
    <div class="ui segment">
      <div class="ui card">
  <div class="content">
    <div class="center aligned header">Jenny Hess</div>
    <div class="center aligned description">
      <p>Jenny is a student studying Media Management at the New School</p>
    </div>
  </div>
  <div class="extra content">
    <div class="center aligned author">
      <img class="ui avatar image" src="http://semantic-ui.com/images/avatar/small/jenny.jpg"> Jenny
    </div>
  </div>
</div>
    </div>
  </div>

<div class="column">
    <div class="ui segment">
      <div class="ui card">
  <div class="content">
    <div class="center aligned header">Jenny Hess</div>
    <div class="center aligned description">
      <p>Jenny is a student studying Media Management at the New School</p>
    </div>
  </div>
  <div class="extra content">
    <div class="center aligned author">
      <img class="ui avatar image" src="http://semantic-ui.com/images/avatar/small/jenny.jpg"> Jenny
    </div>
  </div>
</div>
    </div>
  </div>
</div>



<div class="ui segment">
<div class="ui centered grid">
<h2>Petunjuk Teknis</h2>
</div>
</div>

<div class="ui segment">
<div class="ui centered grid">
<div class="ui inverted segment">

<button class="ui inverted orange button" onclick="about()">About</button>
<br>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
</div>
</div>

</div>
</div>

<div class="ui segment">
<div class="ui centered grid">
<h2>Contact Us</h2>
</div>
</div>
</div>



	<footer style="margin-top: 10px;">
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
	<script src="https://cdn.jsdelivr.net/jquery.glide/1.0.6/jquery.glide.min.js"></script>
	<script type="text/javascript" src="{{asset('js/manual.js')}}"></script>
	<script type="text/javascript">
		function about(){
			$('.ui.modal.coba')
  			.modal('show');
		}	
	</script>

	<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>