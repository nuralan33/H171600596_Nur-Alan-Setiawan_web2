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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kategori_artikel', 'KategoriArtikelController@index')->name('KategoriArtikel.index');
Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('KategoriBerita.index');
Route::get('/kategori_galeri', 'KategoriGaleriController@index')->name('KategoriGaleri.index');
Route::get('/kategori_pengumuman', 'KategoriPengumumanController@index')->name('KategoriPengumuman.index');

Route::get('/artikel', 'ArtikelController@index')->name('Artikel.index');
Route::get('/berita', 'BeritaController@index')->name('Berita.index');
Route::get('/galeri', 'GaleriController@index')->name('Galeri.index');
Route::get('/pengumuman', 'PengumumanController@index')->name('Pengumuman.index');


Route::get('login', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('login', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
