<?php

Route::resource('/', 'homeController');
Route::resource('/index', 'homeController');
Route::resource('/blog', 'blogController');

Route::get('users/{id}', 'productosController@productosuno');
Route::resource('/productos', 'productosController');