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

Route::get('/', 'MainController@home');
Route::get('/admin', 'MainController@admin');
Route::get('/ubah-kamar', 'MainController@edit_kamar');

Route::get('/detail-kamar', 'MainController@detail_kamar');
Route::get('/print-kamar', 'MainController@print_kamar');
Route::post('/ubah-kamar', 'MainController@postEdit_kamar');
Route::post('/tambah-properti', 'MainController@tambah_properti');
Route::get('/hapus-properti', 'MainController@hapus_properti');

Route::get('/tambah-kamar', 'MainController@tambah_kamar');
Route::post('/tambah-kamar', 'MainController@postTambah_kamar');
Route::get('/hapus-kamar', 'MainController@hapus_kamar');

Route::get('/rekap-kamar', 'MainController@rekap_kamar');
Route::get('/print-rekap', 'MainController@printRekap_kamar');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
