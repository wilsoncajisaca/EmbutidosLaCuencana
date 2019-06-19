<?php

Route::resource('/', 'homeController');
Route::resource('/index', 'homeController');
Route::resource('/productos', 'productosController');
Route::resource('/blog', 'blogController');