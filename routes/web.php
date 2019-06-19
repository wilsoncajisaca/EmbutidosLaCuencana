<?php

use App\Categoria;
use App\Producto;

Route::resource('/', 'homeController');
Route::resource('/index', 'homeController');
Route::resource('/productos', 'productosController');
Route::resource('/header', 'headerController');
/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
