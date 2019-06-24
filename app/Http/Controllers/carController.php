<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\carrito;

class carController extends Controller
{
    
    public function listarProductos($user_id)
    {
        $listaProductos=carrito::where("user_id",$user_id)->get();

        echo $listaProductos;

        return view ("cart",
                        [
                            'listaProductos'=>$listaProductos
                        ]
                    );
    }

}
