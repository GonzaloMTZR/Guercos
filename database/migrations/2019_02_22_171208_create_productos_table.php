<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
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
            $table->text('codigo');
            $table->mediumText('descripcion');
            $table->float('precio');
            $table->text('area'); //Cocina, entrada, piso
            $table->text('infinito'); //Si o no
            $table->text('tipoUnidad'); //Kgs, Lts, Pzas
            $table->integer('cantidad');
            $table->text('categoria');// Producto o Insumo
            $table->text('imagenProducto');
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
