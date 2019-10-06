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





Route::get('/kategori_artikel', 'KategoriArtikelController@index')->name('Kategori_Artikel.index');
Route::get('/kategori_artikel/create', 'KategoriArtikelController@create')->name('kategori_Artikel.create');
Route::post('/kategori_artikel','KategoriArtikelController@store')->name('Kategori_Artikel.store');
Route::get('/kategori_artikel/{id}', 'KategoriArtikelController@show')->name('Kategori_Artikel.show');

Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('KategoriBerita.index');
Route::get('/kategori_berita/create', 'KategoriBeritaController@create')->name('kategoriBerita.create');
Route::post('/kategori_berita','KategoriBeritaController@store')->name('KategoriBerita.store');
Route::get('/kategori_berita/{id}', 'KategoriBeritaController@show')->name('KategoriBerita.show');

Route::get('/kategori_galeri', 'KategoriGaleriController@index')->name('KategoriGaleri.index');
Route::get('/kategori_galeri/create', 'KategoriGaleriController@create')->name('KategoriGaleri.create');
Route::post('/kategori_galeri','KategoriGaleriController@store')->name('KategoriGaleri.store');
Route::get('/kategori_galeri/{id}', 'KategoriGaleriController@show')->name('KategoriGaleri.show');

Route::get('/kategori_pengumuman', 'KategoriPengumumanController@index')->name('KategoriPengumuman.index');
Route::get('/kategori_pengumuman/create', 'KategoriPengumumanController@create')->name('KategoriPengumuman.create');
Route::post('/kategori_pengumuman','KategoriPengumumanController@store')->name('KategoriPengumuman.store');
Route::get('/kategori_pengumuman/{id}', 'KategoriPengumumanController@show')->name('KategoriPengumuman.show');

Route::get('/artikel', 'ArtikelController@index')->name('Artikel.index');
Route::get('/artikel/create', 'ArtikelController@create')->name('Artikel.create');
Route::post('/artikel', 'ArtikelController@store')->name('Artikel.store');
Route::get('/artikel/{id}', 'ArtikelController@show')->name('Artikel.show');

Route::get('/berita','BeritaController@index')->name('berita.index');
Route::get('/berita/create','BeritaController@create')->name('berita.create');
Route::post('/berita','BeritaController@store')->name('berita.store');
Route::get('/berita/{id}','BeritaController@show')->name('berita.show');


Route::get('/galeri', 'GaleriController@index')->name('galeri.index');
Route::get('/galeri/create', 'GaleriController@create')->name('galeri.create');
Route::post('/galeri','GaleriController@store')->name('galeri.store');
Route::get('/galeri/{id}', 'GaleriController@show')->name('galeri.show');


Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/create','PengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman','PengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}','PengumumanController@show')->name('pengumuman.show');


Route::get('login', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('login', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
