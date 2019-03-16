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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', 'Auth/LoginController@index');
Route::get('/register', 'RegisterController@index');
// Route::post('/register/create', 'RegisterController@create')->name('registerCreate');

Route::get('/login', 'LoginController@index');
Route::get('/akun', 'AkunController@index');

Route::get('/addcv', 'ResumeController@index');
Route::get('/atur_document', 'DocumentController@index');
Route::get('/daftar-lamaran', 'HomeController@daftar');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');

Route::get('/home', 'HomeController@index')->name('home');

//keterangan Pribadi

Route::get('/keterangan-pribadi', 'KeteranganPribadiController@index');
Route::post('/', 'UploadImageController@upload')->name('upload.image'); //nambahkan gambar
Route::get('/tambah','KeteranganPribadiController@tambah')->name('KeteranganPribadi.tambah');
Route::post('/store','KeteranganPribadiController@store')->name('KeteranganPribadi.storage');
Route::post('/storage','DocumentController@storage')->name('Document.storage');
Route::get('/edit/{id}','KeteranganPribadiController@edit');
Route::post('/update','KeteranganPribadiController@update');
Route::get('/keterangan-pribadi/hapus/{id}','KeteranganPribadiController@hapus');
Route::get('/detail/{id}','KeteranganPribadiController@detail');


