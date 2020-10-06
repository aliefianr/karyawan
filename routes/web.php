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
Route::get('/karyawan','KaryawanController@index');
Route::get('/karyawan/tambah','KaryawanController@tambah');
Route::post('/karyawan/store','KaryawanController@store');
Route::get('/karyawan/edit/{id}','KaryawanController@edit');
Route::post('/karyawan/update','KaryawanController@update');
Route::get('/karyawan/hapus/{id}','KaryawanController@hapus');
Route::get('/', function () {
    return view('welcome');
});
