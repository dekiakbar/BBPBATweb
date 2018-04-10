<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="" content="">
  <title>Input News</title>
  <meta name="csrf-token" content="">
  <link rel="stylesheet" type="text/css" href="css/app.css">
  <link rel="stylesheet" type="text/css" href="css/manual.css">

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
<body>
<div class="ui stackable centered grid">
  <div class="sixteen wide column center aligned">
      <div class="ui segment">
    <h2 class="ui icon header">
  <i class="settings icon"></i>
  <div class="content">
    Admin News
    <div class="sub header">Halaman Untuk Menginput News </div>
  </div>
</h2>
  </div>

<div class="ui container">
   <div class="ui segment">
      <div class="ui form">
        <div class="two fields">
          <div class="field">
            <label>Judul</label>
            <input placeholder="Isi Judul Buku" type="text">
          </div>

    <div class="field">
       <div class="ui stackable centered grid">
          <div class="six wide column center aligned">
            <label>File</label>
            <input type="file" name="file"> 
          </div>
        </div>
    </div>
        </div>
         
            <div class="ui form">
                <div class="field">
                  <label>Deskripsi</label>
                  <textarea></textarea>
                  </div>
            </div>      
        </div>
     </div>
</div>
      </div>
  </div>

<br>

       <div class="ui stackable centered grid">
       <div class="six wide column center aligned">
   <div class="ui button" tabindex="0">Simpan
  </div>
</div>
</div>
</div>

</body>

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

  <script type="text/javascript" src="js/app.js"></script>
  <script type="text/javascript" src="js/manual.js"></script>
  <script type="text/javascript">
    $('.ui.dropdown').dropdown();
  </script>
</body>
</html>