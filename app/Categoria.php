<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use SoftDeletes;
    protected $dates=['deleted_at'];

/*protected $fillable=[
    "categoria",
    "ruta",
    "fecha"
    ];
    */
}
