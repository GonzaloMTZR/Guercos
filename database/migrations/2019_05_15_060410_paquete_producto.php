<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PaqueteProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquete_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('paquete_id')->nullable();
            $table->unsignedInteger('producto_id')->nullable(); //Con el id traera los datos del producto
            $table->foreign('paquete_id')->references('id')->on('paquetes')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
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
        //
    }
}
