<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="" content="">
	<title>Portal</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/manual.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Fullscreen Slit Slider with CSS3 and jQuery" />
    <meta name="keywords" content="slit slider, plugin, css3, transitions, jquery, fullscreen, autoplay" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico"> 
	<link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}" />
	<script type="text/javascript" src="{{asset('js/modernizr.custom.79639.js')}}"></script>
	<noscript>
		<link rel="stylesheet" type="text/css" href="{{asset('css/styleNoJS.css')}}" />
	</noscript>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	.mySlides {display:none;}
	</style>

</head>
<body>

	<div class="ui modal coba" >
		<i class="close icon"></i>
		<div class="image content">
   			<div class="ui medium image">
      			<img src="{{ asset('storage/about') }}/{{$about->foto}}">
    		</div>
    		<div class="description">
      			<div class="ui header">About</div>
      
				<div class="ui segment">
					<div class="ui two column stackable grid">
						<div class="eight wide column">
							<div class="ui raised piled segment ">
								<h1 class="ui center aligned grid" style="margin: 5px;">VISI</h1>
								{{$about->visi}}
							</div>
						</div>

						<div class="eight wide column">
							<div class="ui segment raised piled">
								<h1 class="ui center aligned grid" style="margin: 5px;">MISI</h1>
								{{$about->misi}}
							  </div>
						</div>
					</div>
				</div>

				<div class="ui segment">
					<div class="sixteen wide column">
						<div class="ui segment piled raised">
						<h1 class="ui center aligned grid" style="margin: 5px;">Tentang</h1>
						{{$about->tentang}}
				  		</div>
					</div>
				</div>
			</div>

      	</div>
  	</div>

        <div class="container demo-2">
		
			<!-- Codrops top bar -->
            <div class="codrops-top clearfix">
                
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->

            <header class="clearfix">
			
				<h1>BBPABT <span>Official Website</span></h1>
				
				<nav class="codrops-demos">
					<a>Home</a>
					<a href="http://perpus.bbpbat.com:8000">Perpustakaan</a>
					<a href="http://shop.bbpbat.com:8000">Market</a>
					<a href="http://blog.bbpbat.com:8000">Blog</a>
				</nav>
				
			</header>

            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
							<h2>A bene placito.</h2>
							<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><cite>Ralph Waldo Emerson</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
							<h2>Regula aurea.</h2>
							<blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p><cite>Albert Schweitzer</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
							<h2>Dum spiro, spero.</h2>
							<blockquote><p>Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the abattoirs.</p><cite>Dame Jane Morris Goodall</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-4"></div>
							<h2>Donna nobis pacem.</h2>
							<blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Michael Klaper M.D.</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-5"></div>
							<h2>Acta Non Verba.</h2>
							<blockquote><p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p><cite>Margi Clarke</cite></blockquote>
						</div>
					</div>
				</div><!-- /sl-slider -->

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->


<div class="ui segment">
<div class="ui segment">
	<div class="ui centered grid">
	<br>
<h2>News</h2>
</div>
<div class="ui five column grid">
  
	@foreach($posts as $p)
		<div class="column">
		    <div class="ui segment">
		      <div class="ui special cards">
				  <div class="card">
				    <div class="blurring dimmable image">
				      <div class="ui dimmer">
				        <div class="content">
				          <div class="center">
				            <a href="http://blog.bbpbat.com:8000/detail/{{$p->slug}}" class="ui inverted button" >Lihat</a>
				          </div>
				        </div>
				      </div>
				      <img src="{{asset('storage/foto')}}/{{$p->foto}}">
				    <div class="content">
				      <a class="header">{{$p->judul}}</a>
				      <div class="meta">
				        <span class="date">{{$p->created_at}}</span>
				      </div>
				    </div>	  
				  </div>
				 </div>
			   </div>
			</div>
		</div>
	@endforeach
a
<div class="ui grid" style="margin: 0 auto;">
	<div class="ui inverted segment">
		<a href="http://blog.bbpbat.com:8000" class="ui inverted orange button">Halaman Lain</a>
	</div>
</div>
</div>
</div>
</div>


<div class="ui segment">
	<div class="ui inverted segment">
	<div class="ui centered grid">
	<br>
    	<h3>Pengumuman</h3>
    </div>
		<div class="ui five column grid">
			@foreach($news as $n)
				<div class="column">
				    <div class="ui segment">
				      <div class="ui special cards">
						  <div class="card">
						    <div class="blurring dimmable image">
						      <div class="ui dimmer">
						        <div class="content">
						          <div class="center">
						            <a href="{{ asset('storage/news') }}/{{$n->file}}" class="ui inverted button">Download</a>
						          </div>
						        </div>
						      </div>
						    <div class="content">
						      <a class="header">{{$n->judul}}</a>
						      <p>{{$n->deskripsi}}</p>
						      <div class="meta">
						        <span class="date">{{$n->created_at}}</span>
						      </div>
						    </div>	  
						  </div>
						 </div>
					   </div>
					</div>
				</div>
			@endforeach

		</div>

	<div class="ui centered grid">
	<br>
    	<a href="{{url('/news')}}" class="ui button inverted blue" style="margin-bottom: 10px;">Selengkapnya</a>
    </div>
	</div>
</div>
</div>



<div class="ui segment">
<div class="ui segment">
	<div class="ui centered grid">
	<br>
<h2>Petunjuk Teknis</h2>
</div>
<div class="ui five column grid">
  
	@foreach($juknis as $juktek)
		<div class="column">
		    <div class="ui segment">
		      <div class="ui special cards">
				  <div class="card">
				    <div class="blurring dimmable image">
				      <div class="ui dimmer">
				        <div class="content">
				          <div class="center">
				            <a href="{{asset('storage/juktek')}}/{{$juktek->file}}" class="ui inverted button" >Download</a>
				          </div>
				        </div>
				      </div>
				      <img src="{{asset('storage/juktek')}}/{{$juktek->foto}}">
				    <div class="content">
				      <a class="header">{{$juktek->judul_juktek}}</a>
				      <div class="meta">
				        <span class="date">{{$juktek->created_at}}</span>
				      </div>
				    </div>	  
				  </div>
				 </div>
			   </div>
			</div>
		</div>
	@endforeach
a
<div class="ui grid" style="margin: 0 auto;">
	<div class="ui inverted segment">
		<a href="{{url('juknis')}}" class="ui inverted orange button">Halaman Lain</a>
	</div>
</div>
</div>
</div>
</div>


<div class="ui segment">
<div class="ui centered grid">
{{-- <div class="ui inverted segment"> --}}

<button class="ui inverted orange button" onclick="about()">About</button>
<br>
	{{-- </div> --}}
</div>
</div>

<div class="ui segment">
	<div class="ui inverted segment">
<div class="ui centered grid">
<br>
<h2>Contact Us</h2>
</div>
<br>
  <br>
<br>

<div class="ui centered grid">
<a href="{{$medsos->fb}}" class="ui facebook button">
  <i class="facebook icon"></i>
  Facebook
</a>
<a href="{{$medsos->tweet}}" class="ui twitter button">
  <i class="twitter icon"></i>
  Twitter
</a>
<a href="{{$medsos->google}}" class="ui google plus button">
  <i class="google plus icon"></i>
  Google Plus
</a>
<a href="{{$medsos->ig}}" class="ui instagram button">
  <i class="instagram icon"></i>
  Instagram
</a>
</div>
<br>
<br>
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
	<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
	<script type="text/javascript" src="{{asset('js/jquery.ba-cond.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.slitslider.js')}}"></script>
	<script type="text/javascript">
		$('.special.cards .image')
		.dimmer({on: 'hover'});
			
	</script>
	<script type="text/javascript">
		function about(){
			$('.ui.modal.coba')
  			.modal('show');
		}	
	</script>
	
	<script type="text/javascript">	
		$(function() {
			var Page = (function() {
				var $nav = $( '#nav-dots > span' ),
					slitslider = $( '#slider' ).slitslider( {
						onBeforeChange : function( slide, pos ) {
							$nav.removeClass( 'nav-dot-current' );
							$nav.eq( pos ).addClass( 'nav-dot-current' );
						}
					} ),
					init = function() {
						initEvents();							
					},
					initEvents = function() {
						$nav.each( function( i ) {
							$( this ).on( 'click', function( event ) {
								var $dot = $( this );
								if( !slitslider.isActive() ) {
									$nav.removeClass( 'nav-dot-current' );
									$dot.addClass( 'nav-dot-current' );
								}
								slitslider.jump( i + 1 );
								return false;
							} );
						} );
					};
					return { init : init };
			})();
			Page.init();
		});
	</script>
</body>
</html>