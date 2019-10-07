<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFiestaPaquete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiesta_paquete', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('paquete_id')->nullable();
            $table->unsignedInteger('fiesta_id')->nullable();
            $table->text('comidaNino');
            $table->text('comidaAdulto');
          
            $table->foreign('paquete_id')->references('id')->on('paquetes')->onDelete('cascade');
            $table->foreign('fiesta_id')->references('id')->on('fiestas')->onDelete('cascade');
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
        Schema::dropIfExists('fiesta_paquete');
    }
}
