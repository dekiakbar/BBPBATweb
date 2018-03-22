<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Route subdomain blog 
|--------------------------------------------------------------------------
|
*/
Route::domain('blog.bbpbat.go.id')->group(function () {

	Route::get('/', 'WebController@tampil');
	Route::get('kategori/{kategori}','WebController@kategori');
	Route::get('tag/{tag}','WebController@tag');
	Route::post('/','WebController@cari');
	Route::get('detail/{slug}','WebController@detail');

	/*
	|--------------------------------------------------------------------------
	| Route Admin login dan CRUD
	|--------------------------------------------------------------------------
	|
	*/
	Route::group(['prefix' => 'admin', 'middleware' => 'auth'] ,function () {
		Route::get('/', 'HomeController@index')->name('home');
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

	});

	/*
	|--------------------------------------------------------------------------
	| Override Route Autentifikasi User
	|--------------------------------------------------------------------------
	|
	*/
	//Route Login
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login');
	Route::post('logout', 'Auth\LoginController@logout')->name('logout');

	// Lupa password
	Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('password/reset', 'Auth\ResetPasswordController@reset');

});

/*
|--------------------------------------------------------------------------
| Route Sub Domain perpus.bbpbat.go.id
|--------------------------------------------------------------------------
|
*/
Route::domain('perpus.bbpbat.go.id')->group(function(){
	Route::group(['prefix' => 'admin', 'middleware' => 'auth'] ,function () {
		// Route::resource('/kategori','kPerpusCont');
		Route::get('kategori/tambah','PerpusCont@Ktampil');
		Route::post('kategori/tambah','PerpusCont@Ktambah')->name('kategori.tambah');

		Route::get('buku/tambah','PerpusCont@tambah')->name('perpus.tambah');
		Route::post('buku/tambah','PerpusCont@simpan')->name('perpus.simpan');
		Route::get('buku','PerpusCont@index');
		Route::get('buku/{id}','PerpusCont@edit')->name('perpus.edit');
		Route::patch('buku/{id}','PerpusCont@update')->name('perpus.update');
	});

	//Route Login
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login');
	Route::post('logout', 'Auth\LoginController@logout')->name('logout');

});

/*
|--------------------------------------------------------------------------
| Route Domain utama bbpbat.go.id
|--------------------------------------------------------------------------
|
*/
Route::domain('bbpbat.go.id')->group(function(){
	Route::get('/',function(){
		return view('admin.perpus.Tperpus');
	});
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