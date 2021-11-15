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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('tugas4web');
});
//ulangi untuk Tugas4

Route::get('praktikum2','ViewController@showPraktikum2');

Route::get('show','ViewController@showForm');

Route::post('pengakaran','ViewController@pengakaranfunc');

Route::get('form_ets','ViewController@etspweb');

//route CRUD
Route::get('/pegawai','PegawaiController@index');

Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
