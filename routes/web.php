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
Auth::routes();

Route::get('/','landingController@index' );
Route::get('/search','landingController@search');
Route::get('/detail/{id}','landingController@detail');
Route::get('/dashboard','HomeController@index') ;
Route::get('/kategori','KategoriController@index');
Route::get('/kategori/create','KategoriController@create');
Route::post('/kategori','KategoriController@store');
Route::get('/kategori/{id}/edit','KategoriController@edit');
Route::patch('/kategori/{id}','KategoriController@update');
Route::delete('/kategori/{id}','KategoriController@destroy');
Route::get('/barang','BarangController@index');
Route::get('/barang/create','BarangController@create');
Route::post('/barang','BarangController@store');
Route::get('/barang/{id}/edit','BarangController@edit');
Route::patch('/barang/{id}','BarangController@update');
Route::delete('/barang/{id}','BarangController@destroy');
Route::get('/pasok','PasokController@index');
Route::get('/pasok/create','PasokController@create');
Route::post('/pasok','PasokController@store');
Route::get('/pasok/{id}/edit','PasokController@edit');
Route::patch('/pasok/{id}','PasokController@update');
Route::delete('/pasok/{id}','PasokController@destroy');
Route::get('/penjualan','PenjualanController@index');
Route::get('/findbarang','PenjualanController@getbarang');
Route::get('/penjualan/create','PenjualanController@create');
Route::post('/penjualan','PenjualanController@store');
Route::get('/penjualan/{id}/edit','PenjualanController@edit');
Route::patch('/penjualan/{id}','PenjualanController@update');
Route::delete('/penjualan/{id}','PenjualanController@destroy');
Route::get('/penjualan/cetakform','PenjualanController@cetakform');
Route::get('/penjualan/cetakjual/{tglawal}/{tglakhir}','PenjualanController@cetakpenjualanpertanggal');

Route::get('/dashboard', 'HomeController@index');
