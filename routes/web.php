<?php

Route::resource('/', 'homeController');
Route::resource('/index', 'homeController');
Route::resource('/blog', 'blogController');

Route::resource('/productos', 'productosController');
Route::get('cetegoria/{$id}', 'productosController@getProductos');