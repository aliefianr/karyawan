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
Route::get('/utama','KaryawanController@index');
Route::get('/karyawan/tampil','KaryawanController@tampil');
Route::get('/karyawan/tambah','KaryawanController@tambah');
Route::post('/karyawan/store','KaryawanController@store');
Route::get('/karyawan/edit/{id}','KaryawanController@edit');
Route::post('/karyawan/update','KaryawanController@update');
Route::get('/karyawan/hapus/{id}','KaryawanController@hapus');

Route::get('/jabatan','JabatanController@index');
Route::get('/jabatan/tambah','JabatanController@tambah');
Route::post('/jabatan/store','JabatanController@store');
Route::get('/jabatan/edit/{id}','JabatanController@edit');
Route::post('/jabatan/update','JabatanController@update');
Route::get('/jabatan/hapus/{id}','JabatanController@hapus');

Route::get('/admin/edit/{id}','AdminController@edit');
Route::post('/admin/update','AdminController@update');
Route::get('/admin/hapus/{id}','AdminController@hapus');

Route::get('/karyawan', 'User@index');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');
Route::get('/', function () {
    return view('welcome');
});
