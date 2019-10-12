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

Route::resource('/Kategori_Artikel','KategoriArtikelController');
Route::resource('/Kategori_Berita','KategoriBeritaController');
Route::resource('/Kategori_Galeri','KategoriGaleriController');
Route::resource('/Kategori_Pengumuman','KategoriPengumumanController');
Route::resource('/artikel','ArtikelController');
Route::resource('/berita','BeritaController');
Route::resource('/galeri','GaleriController');
Route::resource('/pengumuman','PengumumanController');