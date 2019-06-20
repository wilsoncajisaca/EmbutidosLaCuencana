<?php

Route::resource('/', 'homeController');
Route::resource('/index', 'homeController');
Route::resource('/blog', 'blogController');

Route::resource('/productos', 'productosController');
Route::get('catproductos/{id}', 'productosController@getProdCat');
Route::get('catprodfilter/{id}/{filtro}', 'productosController@productosFiltros');