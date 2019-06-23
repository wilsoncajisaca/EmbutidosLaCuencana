<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

class DetailProductoController extends Controller
{
    public function productoDetalle($id)
    {
        $productoDetail=Producto::find($id);

        return view ("productos.producto_detail",
        [
            'productoDetail'=>$productoDetail
        ]
   );

    }
}
