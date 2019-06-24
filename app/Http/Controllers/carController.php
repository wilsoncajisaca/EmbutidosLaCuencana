<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\carrito;

class carController extends Controller
{
    
    public function listarProductos()
    {
        return view ("cart");
    }

}
