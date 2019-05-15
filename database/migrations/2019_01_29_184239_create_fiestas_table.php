<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiestas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaFiesta');
            $table->time('horaInicio');
            $table->time('horaFinal');
            $table->time('horaComida');
            $table->text('salon');
            $table->text('nombrePapa');
            $table->text('nombreNiño');
            $table->date('fechaNacNiño');
            $table->text('edadNiño');
            $table->mediumText('calle');
            $table->mediumText('colonia');
            $table->text('ciudad');
            $table->text('telefonoCasa');
            $table->text('telefonoCelular');
            $table->text('correo')->nullable();
            $table->date('fechaReservacion');
            $table->unsignedInteger('idPaquete'); //TABLA - HECHA
            $table->integer('cantidadComidaNiños')->nullable();
            $table->integer('cantidadComidaAdulto')->nullable();
            $table->float('totalPaquete')->nullable();
            $table->float('total')->nullable();
            $table->mediumText('notas')->nullable();
            $table->text('partyStatus'); //TABLA - HECHA
            $table->text('piñata')->nullable();
            $table->text('pastel')->nullable();
            $table->text('manteles');
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
        Schema::dropIfExists('fiestas');
    }
}
