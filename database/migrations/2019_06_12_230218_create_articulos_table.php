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
            $table->int('id_categoria');
            $table->int('id_subcategoria');
            $table->text('tipo');
            $table->text('ruta');
            $table->text('titulo');
            $table->text('titular');
            $table->text('descripcion');
            $table->text('detalles');
            $table->float('precio');
            $table->text('portada');
            $table->int('vistas');
            $table->int('ventas');
            $table->int('vistasGratis');
            $table->int('ventasGratis');
            $table->int('ofertadoPorCategoria');
            $table->int('ofertadoPorSubCategoria');
            $table->int('oferta');
            $table->float('precioOferta');
            $table->int('descuentoOferta');
            $table->text('imgOferta');
            $table->dateTime('finOferta');
            $table->int('nuevo');
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
