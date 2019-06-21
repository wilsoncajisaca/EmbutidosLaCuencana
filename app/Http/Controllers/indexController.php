<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Slide;
use App\Producto;
use App\Linkinstagram;
use App\Articulosblog;
use App\User;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //$request->User()->authorizeRoles(['user']);

        $slide = Slide::all();
        $producto = Producto::all();
        $blogs = Articulosblog::orderBy('fecha','desc')->take(3)->get();
        $masvendidos = Producto::orderBy('ventas','desc')->take(3)->get();
        $masrecientes = Producto::orderBy('fecha','desc')->take(3)->get();
        $fotosIns = Linkinstagram::take(5)->get();

        return view ("index",
                         [
                             'slides'=>$slide, 
                             'productos'=>$producto, 
                             'instagramfotos'=>$fotosIns, 
                             'blogs'=>$blogs,
                             'masvendidos'=>$masvendidos,
                             'masrecientes'=>$masrecientes
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
