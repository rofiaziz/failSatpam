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
    return view('cargo');
    
});

Route::get('halo',function(){
	return "Coba String";
});

Route::get('blog', function(){
	return view('blog');
});

Route::get('/Cargos', function(){
	return view('cargo');
});

Route::get('dosen','DosenController@index');

// Route::get('/pegawai/{nama}','PegawaiController@index');
// //https://www.malasngoding.com/request-data-pada-laravel/

Route::get('/formulir','PegawaiController@formulir');
Route::post('/formulir/proses','PegawaiController@proses');

//bikin web "blog" sederhana
Route::get('/blog','BlogController@home');
Route::get('/blog/tentang','BlogController@tentang');
Route::get('/blog/kontak','BlogController@kontak');


//main CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store'); // menggunakan method post karena route ini akan mengirimkan data
Route::get('/pegawai/edit/{id}','PegawaiController@edit'); // maksudnya id nya ikut kebawa ngelink dan di simpan dalam dalam istilah {id}
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/pegawai/cari','PegawaiController@cari');