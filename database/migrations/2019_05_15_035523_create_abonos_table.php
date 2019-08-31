<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidadAbono');
            $table->timestamps();
        });
      
        Schema::create('abonos_fiesta', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fiesta_id');
            $table->unsignedInteger('abonos_id'); //Con el id traera los datos del producto
           $table->text('tipoPago')->nullable();
            $table->text('pinConfirmacion')->nullable();
            $table->foreign('fiesta_id')->references('id')->on('fiestas')->onDelete('cascade');
            $table->foreign('abonos_id')->references('id')->on('abonos')->onDelete('cascade');
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
        Schema::dropIfExists('abonos');
    }
}
