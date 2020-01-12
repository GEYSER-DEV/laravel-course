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

 //Route::get('permiso/{nombre}','PermisoController@index');

//Route::view('/permiso', 'permiso');

Route::get('permiso/{nombre}', function ($nombre) {
    return $nombre;
})->where('nombre','[A-Za-z]+')->name('permiso');