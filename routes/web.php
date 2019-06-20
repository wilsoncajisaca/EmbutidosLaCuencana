<?php

Route::resource('/', 'homeController');
Route::resource('/index', 'homeController');
Route::resource('/blog', 'blogController');

Route::get('/detalle/{$id}', 'productosController@detalle')->name('detail');

Route::resource('/productos', 'productosController');