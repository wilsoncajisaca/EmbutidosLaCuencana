<?php 

namespace App\Http\Controllers;

class ventas extends Controller{

    public function start($id){
        return "Estas en el inicio del sition " . $id;
    }

}