<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide', function (Blueprint $table) {
            $table->increments('id');

            $table->text('imgFondo');
            $table->text('tipoSlide');
            $table->text('imgProducto');
            $table->text('estiloImgProducto');
            $table->text('estiloTextoSlide');
            $table->text('titulo1');
            $table->text('titulo2');
            $table->text('titulo3');
            $table->text('boton');
            $table->text('url');
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
        Schema::dropIfExists('slide');
    }
}
