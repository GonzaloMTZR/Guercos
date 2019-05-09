<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id'); //Solo se necesita el nombre y el id del usuario
            $table->text('serieComprobante');
            $table->text('folio');
            $table->integer('totalVenta'); //Precio total de la venta
            $table->text('tipoComprobante');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->timestamps();
        });

        Schema::create('producto_venta', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('venta_id');
            $table->unsignedInteger('producto_id'); //Con el id traera los datos del producto
            //$table->float('precio'); //Precio del producto
            $table->integer('cantidad');
            $table->integer('descuento')->default(0)->nullable();
            $table->foreign('venta_id')->references('id')->on('ventas')->onDelete('cascade');
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
        Schema::dropIfExists('ventas');
    }
}
