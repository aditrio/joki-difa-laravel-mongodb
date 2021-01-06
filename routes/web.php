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
Route::get('/', 'HomeController@dash');

Route::get('/home', 'HomeController@dash')->name('home');
Route::get('/dash', 'HomeController@dash')->name('dash');


Route::get('/absensi', 'AbsensiController@index');
Route::put('/submit/absensi/{nama}/{id}', 'AbsensiController@absen');

Route::get('/jadwal-guru', 'JadwalController@index');


Route::post('/jadwal/store', 'JadwalController@store')->name('store.jadwal');
Route::put('/jadwal/{id}/update', 'JadwalController@update')->name('update.jadwal');
Route::delete('/jadwal/{id}/delete', 'JadwalController@destroy')->name('delete.jadwal');



