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


/*Route::get("/leer", function(){

    $categorias=App\Categoria::all();

    foreach($categorias as $categoria){

        echo $categoria->categoria;

    }

});*/

Route::get("/categoria", function(){

    $categorias=App\Categoria::where('categoria',"HOME")
    ->where('ruta', '/home')
    ->get();

    return $categorias;

});

Route::get("/insert",function(){

    $categorias=new App\Categoria;

    $categorias->categoria="PRUEBA";
    $categorias->ruta="/prueba";
    $categorias->fecha="06-16-2019 12:57:00";

    $categorias->save();

});

Route::get("/update",function(){

    $categorias=App\Categoria::find(7);

    $categorias->categoria="ACERCA DE";
    $categorias->ruta="/about";
    $categorias->fecha="06-16-2019 12:57:00";

    $categorias->save();

});

Route::get("/borrar",function(){

    $categorias=App\Categoria::find(7);

    $categorias->delete();

    //Or

    //App\Categoria::where('id',7)->delete();

});

Route::get("/varios",function(){

    App\Categoria::create(["categoria"=>"VARIOS", "ruta"=>"/varios", "fecha"=>"06-16-2019 14:17:00"]);

});

Route::get("/softdeleted",function(){

    App\Categoria::find(8)->delete();

});

Route::get("/leer",function(){

    $categorias=App\Categoria::withTrashed()
    ->where('id',8)
    ->get();

});
