<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<title>Admin | Super Admin</title>
	<meta name="csrf-token" content="">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/manual.css'">

</head>
<body style="background-image: url(jpg/1.jpg);background-size: contain">
<img class="ui image" src="">
    
	
    
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
                    <a href="{{ url('admin/portal') }}" class="ui icon button">
                      <i style="width: 150px; height: 100px" class="newspaper icon"><p>PORTAL</p></i>
                    </a>
                </div>
                
                <div class="column">
                    <a href="{{url('admin/blog')}}" class="ui icon button">
                      <i style="width: 150px; height: 100px" class="globe icon"><p>BLOG</p></i>
                    </a>
                </div>

                <div class="column">
                    <a href="{{url('admin/perpus/buku')}}" class="ui icon button">
                      <i style="width: 150px; height: 100px" class="book icon"><p>PERPUSTAKAAN</p></i>
                    </a>
                </div>

                <div class="column">
                <a href="{{url('admin/shop/produk')}}" class="ui icon button">
                  <i style="width: 150px; height: 100px" class="shopping cart icon"><p>MARKETS</p></i>
                </a>
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

	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/manual.js"></script>
</body>
</html>