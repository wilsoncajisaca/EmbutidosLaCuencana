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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function detalle($id)
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

        $Productofind=Producto::where('categoria_id', $id)
            ->orderBy('fecha', 'desc')
            ->take(10)
            ->get();
        $categorias=Categoria::all();
        $banner=Bannerproducto::take(5)
            ->get();
        $totalProductos=Producto::all()->count();
        return view ("productos.lista",
                        [
                            'categorias'=>$categorias,
                            'totalProductos'=>$totalProductos,
                            'banners'=>$banner,
                            'productos'=>$Productofind
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
