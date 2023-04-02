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
    return view('Login.login');
});
//Route::get('/home', 'App\Http\Controllers\AuthController@index')->name('home');
Route::get('/login', 'App\Http\Controllers\AuthController@gagal')->name('login');
Route::post('/postlogin', 'App\Http\Controllers\AuthController@postlogin');
Route::get('/registrasi', 'App\Http\Controllers\AuthController@add')->name('register');
Route::post('/registrasi/tambah', 'App\Http\Controllers\AuthController@tambah');
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/home', 'App\Http\Controllers\AuthController@index')->name('home');
});
Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');


Route::get('/surat', 'App\Http\Controllers\SuratMasukController@index')->name('surat');
Route::get('/surat/add', 'App\Http\Controllers\SuratMasukController@add');
Route::post('/surat/tambah', 'App\Http\Controllers\SuratMasukController@tambahdata');
Route::get('/surat/detail/{id}', 'App\Http\Controllers\SuratMasukController@detail');
Route::get('/surat/edit/{id}', 'App\Http\Controllers\SuratMasukController@edit');
Route::post('/surat/update/{id}', 'App\Http\Controllers\SuratMasukController@updatesurat');
Route::delete('/surat/delete/{id}', 'App\Http\Controllers\SuratMasukController@delete');
//Route::get('/surat/cari','App\Http\Controllers\SuratMasukController@cari');