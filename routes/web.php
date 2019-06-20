<?php

Route::resource('/', 'homeController');
Route::resource('/index', 'homeController');
Route::resource('/blog', 'blogController');

Route::get('detalle_producto/{id}', 'productosController@productosuno');
Route::resource('/productos', 'productosController');