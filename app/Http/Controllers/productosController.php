<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;
use App\Producto;
use App\Bannerproducto;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=Categoria::all();
        $productos=Producto::all();
        $banner=Bannerproducto::take(5)->get();
        $totalProductos=Producto::all()->count();
        return view ("productos.lista",
                        [
                            'categorias'=>$categorias,
                            'totalProductos'=>$totalProductos,
                            'banners'=>$banner,
                            'productos'=>$productos
                        ]
                    );
    }

    public function getProdCat(Request $request, $id)
    {
        if($request->ajax()){

            $productos=Producto::productosCat($id);

            return response()->json($productos);
        }
    }

    public function productosFiltros(Request $request, $idCat, $filtro)
    {
        if($request->ajax()){

            $productos=Producto::productosFilter($idCat, $filtro);

            return response()->json($productos);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $productoDetail=Producto::findOrFail($id);
        $productosImagen=Producto::findOrFail($id);

        return view ("productos.producto_detail",
                        [
                            'productoDetail'=>$productoDetail,
                            'productosImagen'=>$productosImagen
                        ]
                    );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
