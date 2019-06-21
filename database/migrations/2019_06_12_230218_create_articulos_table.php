<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id');
            $table->text('tipo');
            $table->text('ruta');
            $table->text('titulo');
            $table->text('titular');
            $table->text('descripcion');
            $table->text('detalles');
            $table->float('precio');
            $table->text('portada');
            $table->integer('vistas');
            $table->integer('ventas');
            $table->integer('vistasGratis');
            $table->integer('ventasGratis');
            $table->integer('ofertadoPorCategoria');
            $table->integer('ogitfertadoPorSubCategoria');
            $table->integer('oferta');
            $table->float('precioOferta');
            $table->integer('descuentoOferta');
            $table->text('imgOferta');
            $table->dateTime('finOferta');
            $table->integer('nuevo');
            $table->float('peso');
            $table->float('entrega');
            $table->timestamp('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
