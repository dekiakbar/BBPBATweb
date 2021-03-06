<?php
/*
|--------------------------------------------------------------------------
| Route subdomain blog.bbpbat.go.id
|--------------------------------------------------------------------------
|
*/
Route::domain('blog.bbpbat.com')->group(function () {

	/*
	|--------------------------------------------------------------------------
	| Route Admin login dan CRUD
	|--------------------------------------------------------------------------
	|
	*/
	// Route::group(['prefix' => 'admin', 'middleware' => 'auth'] ,function () {

	// 	Route::get('/', 'HomeController@index')->name('home');
	// 	Route::post('/','HomeController@gantiPas');

	// 	// Registrasi Admin
	// 	Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	// 	Route::post('register', 'Auth\RegisterController@register');

	// 	//Routing kategori
	// 	Route::resource('/kategori','KategoriController',[
	// 	    'except' => 'show'
	// 	]);
	// 	Route::post('/kategori/cari','KategoriController@cari')->name('kategori.cari');

	// 	//Routing tag
	// 	Route::resource('/tag','TagController',[
	// 		'except' => 'show'
	// 	]);
	// 	Route::post('/tag/cari','TagController@cari')->name('tag.cari');

	// 	//route artikel
	// 	Route::resource('/artikel','ArtikelController');
	// 	Route::post('/artikel/cari','ArtikelController@cari')->name('artikel.cari');
		
	// 	//route json kategori
	// 	Route::get('tag/{kategori_id}', 'TagController@ambilTag');
	// });

		//route web user
		Route::get('/', 'WebController@tampil')->name('blog');
		Route::get('kategori/{kategori}','WebController@kategori');
		Route::get('tag/{tag}','WebController@tag');
		Route::post('/','WebController@cari');
		Route::get('detail/{slug}','WebController@detail');

	/*
	|--------------------------------------------------------------------------
	| Override Route Autentifikasi User
	|--------------------------------------------------------------------------
	|
	*/
	//Route Login
	// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	// Route::post('login', 'Auth\LoginController@login');
	// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

	// Lupa password
	// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
	// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

});



/*
|--------------------------------------------------------------------------
| Route Sub Domain perpus.bbpbat.go.id
|--------------------------------------------------------------------------
|
*/
Route::domain('perpus.bbpbat.com')->group(function(){
	
	// Route admin perpus 
	// Route::group(['prefix' => 'admin', 'middleware' => 'auth'] ,function () {
	// 	Route::get('kategori/tambah','PerpusCont@Ktampil');
	// 	Route::post('kategori/tambah','PerpusCont@Ktambah')->name('kategori.tambah');

	// 	Route::get('buku/tambah','PerpusCont@tambah')->name('perpus.tambah');
	// 	Route::post('buku/tambah','PerpusCont@simpan')->name('perpus.simpan');
	// 	Route::get('buku','PerpusCont@index');
	// 	Route::get('buku/{id}','PerpusCont@edit')->name('perpus.edit');
	// 	Route::patch('buku/{id}','PerpusCont@update')->name('perpus.update');
	// 	Route::delete('buku/{id}','PerpusCont@destroy')->name('perpus.hapus');
	// });

	//Route User Web
	Route::get('/','WebPerpusCont@tampil')->name('perpus');
	Route::post('/','WebPerpusCont@cari')->name('perpus.cari');
	Route::get('/kategori/{kategori}','WebPerpusCont@kategori')->name('perpus.kategori');

	//Route Login
	// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	// Route::post('login', 'Auth\LoginController@login');
	// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

});

/*
|--------------------------------------------------------------------------
| Route admin Marketplace
|--------------------------------------------------------------------------
|
*/

Route::domain('shop.bbpbat.com')->group(function(){
	//Route Admin Shop
	// Route::group(['prefix' => 'admin', 'middleware' => 'auth'] ,function () {
	// 	// Route::get('/', 'HomeController@index')->name('home');
	// 	// Route::get('kategori-shop/tambah','KshopCont@KStambah');
	// 	// Route::get('kategori/','KshopCont@index');

	// });

	//Route Login
	// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	// Route::post('login', 'Auth\LoginController@login');
	// Route::post('logout', 'Auth\LoginController@logout')->name('logout');
	Route::get('/list',function(){
		return view('shop.keranjang');
	});

	Route::get('/','ShopContClient@index')->name('shop');
	Route::get('/kategori/{id}','ShopContClient@kategori')->name('shop.kategori');

	Route::get('beli/{id}','ShopContClient@tampil_beli')->name('shop.tampil.beli');
	Route::patch('beli/{id}','ShopContClient@beli')->name('shop.beli');

	Route::get('pembeli/{email}','ShopContClient@keranjang')->name('shop.keranjang');
	// Route::get('pembeli/tambah/{email}','ShopContClient@keranjang')->name('shop.tambah');

	Route::delete('shop/verif/{id}','ShopContClient@pesan_hapus')->name('shop.delete.keranjang');
});

/*
|--------------------------------------------------------------------------
| Route Domain utama bbpbat.go.id
|--------------------------------------------------------------------------
|
*/
Route::domain('bbpbat.com')->group(function(){

	Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){

		//Route Admin Dashboard
			Route::get('/',function(){
				return view('admin.dashboard');
			});

			Route::get('portal','AdminPortalCont@index');
			Route::patch('portal/medsos/{id}','AdminPortalCont@medsos')->name('admin.medsos');
			Route::patch('portal/about/{id}','AdminPortalCont@about')->name('admin.about');
			Route::patch('portal/slider/{id}','AdminPortalCont@slider')->name('admin.slider');
		
		//=============================================
		//route News
		Route::resource('news','AdminNews',[
			'except' => 'show'
		]);

		//route admin Petunjuk teknis
		Route::get('juktek/tambah','JuktekController@tambah');
		Route::post('juktek/tambah','JuktekController@simpan')->name('juktek.simpan');
		Route::get('juktek','JuktekController@index');
		Route::get('juktek/{slug}/edit','JuktekController@edit')->name('juktek.edit');
		Route::patch('juktek/{slug}','JuktekController@perbaharui')->name('juktek.perbaharui');
		//Route::get('juktek/{slug}','JuktekController@detail')->name('juktek.detail');
		Route::delete('juktek/{slug}','JuktekController@hapus')->name('juktek.hapus');

		//===============================BLOG=============================================
		Route::get('blog/', 'HomeController@index')->name('home');
		Route::post('/','HomeController@gantiPas');

		// Registrasi Admin
		Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
		Route::post('register', 'Auth\RegisterController@register');

		//Routing kategori
		Route::resource('/kategori','KategoriController',[
		    'except' => 'show'
		]);
		Route::post('/kategori/cari','KategoriController@cari')->name('kategori.cari');

		//Routing tag
		Route::resource('/tag','TagController',[
			'except' => 'show'
		]);
		Route::post('/tag/cari','TagController@cari')->name('tag.cari');

		//route artikel
		Route::resource('/artikel','ArtikelController');
		Route::post('/artikel/cari','ArtikelController@cari')->name('artikel.cari');
		
		//route json kategori
		Route::get('tag/{kategori_id}', 'TagController@ambilTag');

		//================================PERPUS============================================

		Route::get('perpus/kategori/tambah','PerpusCont@Ktampil');
		Route::post('perpus/kategori/tambah','PerpusCont@Ktambah')->name('kategori.tambah');

		Route::get('perpus/buku/tambah','PerpusCont@tambah')->name('perpus.tambah');
		Route::post('perpus/buku/tambah','PerpusCont@simpan')->name('perpus.simpan');
		Route::get('perpus/buku','PerpusCont@index');
		Route::get('perpus/buku/{id}','PerpusCont@edit')->name('perpus.edit');
		Route::patch('perpus/buku/{id}','PerpusCont@update')->name('perpus.update');
		Route::delete('perpus/buku/{id}','PerpusCont@destroy')->name('perpus.hapus');

		//===================================SHOP===========================================

		//kategori shop
		Route::get('shop/kategori','KshopCont@index');
		Route::get('shop/kategori/tambah','KshopCont@KStampil');
		Route::post('shop/kategori/tambah','KshopCont@KStambah')->name('Kshop.tambah');
		Route::delete('shop/kategori/{id}','KshopCont@KShapus')->name('Kshop.hapus');

		//shop na
		Route::get('shop/produk','ShopCont@index');
		Route::get('shop/produk/tambah','ShopCont@tampil')->name('shop.input');
		Route::post('shop/produk/tambah','ShopCont@tambah')->name('shop.tambah');
		Route::get('shop/produk/{slug}/edit','ShopCont@edit')->name('shop.edit');
		Route::patch('shop/produk/{slug}','ShopCont@simpan')->name('shop.update');
		Route::delete('shop/produk/{slug}','ShopCont@hapus')->name('shop.hapus');

		//verifikasi pesanan
		Route::get('shop/verif','AdminPortalCont@tampil_verif_shop');
		Route::patch('shop/verif/{id}','AdminPortalCont@verif_shop')->name('acc.pesan.shop');
		Route::delete('shop/verif/{id}','AdminPortalCont@pesan_hapus')->name('pesan.delete');

		//===================================PKLAN===========================================
		Route::get('pkl','PklController@index');
		Route::get('pkl/tambah','PklController@tambah')->name('pkl');
		Route::post('pkl/tambah','PklController@simpan')->name('pkl.tambah');
		Route::get('pkl/{id}/edit','PklController@edit')->name('pkl.edit');
		Route::patch('pkl/{id}','PklController@perbaharui')->name('pkl.update');
		Route::post('pkl/download','PklController@download_csv')->name('pkl.csv.download');
		Route::get('pkl/pdf/{id}','PklController@pdf')->name('pdf');
	});

	//Route Login
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login');
	Route::post('logout', 'Auth\LoginController@logout')->name('logout');

	// Lupa password
	Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('password/reset', 'Auth\ResetPasswordController@reset');

	Route::get('news','PortalController@news');
	Route::get('juknis','JuknisContClient@index');
	Route::get('/','PortalController@index')->name('landing');

	//pklan
	Route::get('pkl/tambah','PklController@tambah')->name('pkl');
	Route::post('pkl/tambah','PklController@simpan')->name('pkl.tambah');

});

/*
|--------------------------------------------------------------------------
| Override Route Filemanager
|--------------------------------------------------------------------------
|
*/
Route::get('media',function(){
	return abort(404);
});