<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    public static function productos($id){
        return Producto::where('categoria_id','=',$id)
        ->get();
    }

    //protected $fillable=['titulo'];

    /*public function producto(){
        return $this->hasOne("App\Categoria");
    }*/


    //protected $primarykey="art_Id";
    //protected $table="productos";
}
