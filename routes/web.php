<?php

use App\Categoria;
use App\Producto;

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
Route::resource('/', 'homeController');
Route::resource('/home', 'homeController');
Route::resource('/productos', 'productosController');
/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
