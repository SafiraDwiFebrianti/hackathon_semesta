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



Route::get('/', 'Autentikasi\AutentikasiController@index')->name("login");
Route::post('/', 'Autentikasi\AutentikasiController@login')->name("login");

Route::group(['middleware' => 'CekLoginMiddleware'], function (){
  Route::get('/dashboard', function () {
      return view('index');
  });
  Route::get('rumah_sakit', 'RsController@index')->name("rumah_sakit");
  Route::get('rumah_sakit/tambah', 'RsController@tambah')->name("rumah_sakit/tambah");
  Route::post('rumah_sakit', 'RsController@simpan')->name("rumah_sakit/simpan");
  Route::delete('rumah_sakit/{id}', 'RsController@delete')->name("rumah_sakit/delete");
  Route::get('rumah_sakit/{id}/edit', 'RsController@edit')->name("rumah_sakit/edit");
  Route::patch('rumah_sakit/{id}', 'RsController@update')->name("rumah_sakit/update");
  Route::get('/logout', 'Autentikasi\AutentikasiController@logout')->name("logout");
});
