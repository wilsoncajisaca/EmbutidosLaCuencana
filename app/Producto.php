<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{


    /*<li> <button style="background-color: transparent" data-toggle="modal" data-target="#miModal" >Entrar</button></li>
											<li> <button style="background-color: transparent" data-toggle="modal" data-target="#miModal" >Registrarme</button></li>*/


    public static function productos($id){
        return Producto::where('categoria_id',$id)
        ->get();
    }
    

    //protected $fillable=['titulo'];

    /*public function producto(){
        return $this->hasOne("App\Categoria");
    }*/


    //protected $primarykey="art_Id";
    //protected $table="productos";
}
