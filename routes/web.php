<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');
Auth::routes();
Route::post('my-captcha', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Auth::routes();
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Auth::routes();
Route::get('/Home', 'HomeController@index')->name('home');

route::get('/Kategori_Artikel', 'KategoriArtikelController@index')->name('Kategori_Artikel.index');
route::get('/Kategori_Artikel/create','KategoriArtikelController@create')->name('Kategori_Artikel.create');
route::post('/Kategori_Artikel','KategoriArtikelController@store')->name('Kategori_Artikel.store');
route::get('/Kategori_Artikel/{id}', 'KategoriArtikelController@show')->name('Kategori_Artikel.show');


route::get('/Kategori_Berita', 'KategoriBeritaController@index')->name('Kategori_Berita.index');
route::get('/Kategori_Berita/create','KategoriBeritaController@create')->name('Kategori_Berita.create');
route::post('/Kategori_Berita','KategoriBeritaController@store')->name('Kategori_Berita.store');
route::get('/Kategori_Berita/{id}', 'KategoriBeritaController@show')->name('Kategori_Berita.show');

route::get('/Kategori_Galeri', 'KategoriGaleriController@index')->name('Kategori_Galeri.index');
route::get('/Kategori_Galeri/create','KategoriGaleriController@create')->name('Kategori_Galeri.create');
route::post('/Kategori_Galeri','KategoriGaleriController@store')->name('Kategori_Galeri.store');
route::get('/Kategori_Galeri/{id}', 'KategoriGaleriController@show')->name('Kategori_Galeri.show');


route::get('/Kategori_Pengumuman', 'KategoriPengumumanController@index')->name('Kategori_Pengumuman.index');
route::get('/Kategori_Pengumuman/create','KategoriPengumumanController@create')->name('Kategori_Pengumuman.create');
route::post('/Kategori_Pengumuman','KategoriPengumumanController@store')->name('Kategori_Pengumuman.store');
route::get('/Kategori_Pengumuman/{id}', 'KategoriPengumumanController@show')->name('Kategori_Pengumuman.show');






Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');
Route::get('/artikel/create', 'ArtikelController@create')->name('artikel.create');
Route::post('/artikel', 'ArtikelController@store')->name('artikel.store');
Route::get('/artikel/{id}', 'ArtikelController@show')->name('artikel.show');


Route::get('/berita', 'BeritaController@index')->name('berita.index');
Route::get('/berita/create', 'BeritaController@create')->name('berita.create');
Route::post('/berita', 'BeritaController@store')->name('berita.store');
Route::get('/berita/{id}', 'BeritaController@show')->name('berita.show');

Route::get('/galeri', 'GaleriController@index')->name('galeri.index');
Route::get('/galeri/create', 'GaleriController@create')->name('galeri.create');
Route::post('/galeri', 'GaleriController@store')->name('galeri.store');
Route::get('/galeri/{id}', 'GaleriController@show')->name('galeri.show');




Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/create', 'PengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman', 'PengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}', 'PengumumanController@show')->name('pengumuman.show');
