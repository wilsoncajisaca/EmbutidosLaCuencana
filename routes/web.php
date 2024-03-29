<?php

Route::resource('/', 'indexController');
Route::resource('index', 'indexController');
Route::resource('home', 'indexController');
Route::resource('blog', 'blogController');
Route::resource('productos', 'productosController');

Route::get('catproductos/{id}', 'productosController@getProdCat');
Route::get('catprodfilter/{id}/filtro/{idfilter}', 'productosController@productosFiltros');

Route::get('nosotros', function(){
    return view("about");
});

Route::get('contactanos', function(){
    return view("contacto");
});

Route::get('carrito', 'carController@listarProductos');

Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();
