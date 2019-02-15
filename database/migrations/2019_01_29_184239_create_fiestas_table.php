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
            $table->text('folioFiesta');
            $table->date('fechaFiesta');
            $table->time('horaInicio');
            $table->time('horaFinal');
            $table->time('horaComida');
            $table->unsignedInteger('idSalon'); //TABLA - HECHA
            $table->text('nombrePapa');
            $table->text('nombreNiño');
            $table->date('fechaNacNiño');
            $table->text('edadNiño');
            $table->mediumText('calle');
            $table->mediumText('colonia');
            $table->text('ciudad');
            $table->text('telefonoCasa');
            $table->text('telefonoCelular');
            $table->text('correo');
            $table->date('fechaReservacion');
            $table->unsignedInteger('idPaquete'); //TABLA - HECHA
            $table->unsignedInteger('idPeriodo'); //TABLA - HECHA
            $table->unsignedInteger('idComidaNiños'); //TABLA - ¿?
            $table->unsignedInteger('idComidaAdulto'); //TABLA -¿?
            $table->integer('cantidadComidaNiños');
            $table->integer('cantidadComidaAdulto');
            $table->float('totalPaquete');
            $table->float('total');
            $table->mediumText('notas');
            $table->unsignedInteger('idPartyStatus'); //TABLA - HECHA
            $table->text('piñata');
            $table->text('pastel');
            $table->mediumText('chargeSheetNotes');
            $table->integer('porcentajeDescuento');
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
