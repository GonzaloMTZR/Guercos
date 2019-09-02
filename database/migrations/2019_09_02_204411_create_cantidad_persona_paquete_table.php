<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCantidadPersonaPaqueteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cantidad_persona_paquete', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cantidad_persona_id')->nullable();
            $table->foreign('cantidad_persona_id')->references('id')->on('cantidad_personas')->onDelete('cascade');
          
            $table->unsignedInteger('paquete_id')->nullable();
            $table->foreign('paquete_id')->references('id')->on('paquetes')->onDelete('cascade');
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
        Schema::dropIfExists('cantidad_persona_paquete');
    }
}
