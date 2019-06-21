<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    public static function productosCat($id){
        return Producto::where('categoria_id',$id)
        ->get();
    }
    
    public static function productosFilter($idCat, $filtro){

        if($filtro==1){
            return Producto::where('categoria_id',$idCat)
            ->orderBy('precio','desc')
            ->get();

        }elseif ($filtro==2) {
            return Producto::where('categoria_id',$idCat)
            ->orderBy('precio','desc')
            ->get();

        }elseif ($filtro==3) {
            return Producto::where('categoria_id',$idCat)
            ->orderBy('precio','asc')
            ->get();

        }elseif ($filtro==4) {
            return Producto::where('categoria_id',$idCat)
            ->orderBy('precio','desc')
            ->get();
        }

    }
    //protected $fillable=['titulo'];

    /*public function producto(){
        return $this->hasOne("App\Categoria");
    }*/


    //protected $primarykey="art_Id";
    //protected $table="productos";
}
