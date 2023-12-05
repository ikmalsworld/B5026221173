<?php

use Illuminate\Support\Facades\Route;

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

Route::get('hello', function () {
    return view('hello');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('link', function () {
    return view('link');
});

Route::get('style', function () {
    return view('style');
});

Route::get('validasi', function () {
    return view('validasi');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('latihan_layout', function () {
    return view('latihan_layout');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//latihan nilai kuliah
Route::get('/nilaikuliah', 'App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/tambah', 'App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');



//crud tugas pra eas harddisk
Route::get('/harddisk','App\Http\Controllers\HarddiskController@index');
Route::get('/harddisk/tambah','App\Http\Controllers\HarddiskController@tambah');
Route::post('/harddisk/store','App\Http\Controllers\HarddiskController@store');
Route::get('/harddisk/edit/{id}','App\Http\Controllers\HarddiskController@edit');
Route::post('/harddisk/update','App\Http\Controllers\HarddiskController@update');
Route::get('/harddisk/hapus/{id}','App\Http\Controllers\HarddiskController@hapus');
Route::get('/harddisk/cari','App\Http\Controllers\HarddiskController@cari');
Route::get('/harddisk/view/{id}','App\Http\Controllers\HarddiskController@view');

//crud latihan keranjang belanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangBelanjaController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangBelanjaController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangBelanjaController@store');
// Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/keranjangbelanja/update','App\Http\Controllers\KeranjangBelanjaController@update');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangBelanjaController@hapus');
