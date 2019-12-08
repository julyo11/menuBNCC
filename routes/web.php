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

Route::get('/makanan/create','MakananController@create');
Route::post('/makanan', 'MakananController@store');
Route::get('/makanan', 'MakananController@index');
Route::delete('makanan/{makanan}','MakananController@destroy');
Route::get('makanan/{makanan}/edit','MakananController@edit');
Route::put('makanan/{makanan}','MakananController@update');