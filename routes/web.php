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


Route::get('/', ['as' => '/', 'uses' => 'Sitio@home']);
Route::get('contactanos', ['as' => 'contactanos', 'uses' => 'Sitio@contactanos']);
Route::get('{ubicacion?}/tours-aventuras', ['as' => '{ubicacion?}/tours-aventuras', 'uses' => 'Sitio@ubicacion'])->where('ubicacion', "[A-Za-z]+");
Route::get('{tour?}/informacion', ['as' => '{tour?}/informacion', 'uses' => 'Sitio@infoTour']);
Route::post('ingresar-carrito', ['as' => 'ingresar-carrito' , 'uses' => 'Sitio@insertCard']);

