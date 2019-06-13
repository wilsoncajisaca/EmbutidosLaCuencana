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

/*Route::get('/', function () {
    return view('home');
});*/

/*Route::get('/tienda/{id}/{name}', function ($id,$nombre) {
    return "Session tienda ".$id. " Creado por ". $nombre;
})->where('name','[a-zA-Z]+');*/ 

//Route::get('/start/{id}','ventas@start');

/*Route::get('/','paginascontroller@inicio');
Route::get('/index','paginascontroller@inicio');
Route::get('/inicio','paginascontroller@inicio');
Route::get('/home','paginascontroller@inicio');
Route::get('/cart','paginascontroller@cart');*/

//Route::resource("posts","paginaPrincipal");

Route::get("/","paginaPrincipal@index");
Route::get("/home","paginaPrincipal@index");
Route::get("/login","paginaPrincipal@create");
Route::get("/registro","paginaPrincipal@show");


Route::get("/carrito","carController@index");

Route::get("/productos","productosController@index");
Route::get("/detalle_producto","productosController@show");

Route::get("/blog","blogController@index");
Route::get("/blog_detalle","blogController@show");


Route::get("/nosotros","aboutController@index");

Route::get("/contactanos","contactController@index");


Route::get("/leer", function(){

    $productos=Producto::all();

    foreach($productos as $producto){

        echo $producto->titulo;

    }

});