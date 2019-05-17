<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaquetesidFiesta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fiestas', function (Blueprint $table) {
            $table->unsignedInteger('paquetes_id');
            $table->foreign('paquetes_id')->references('id')->on('paquetes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fiestas', function (Blueprint $table) {
            $table->dropForeign(['paquetes_id']);
            $table->dropColumn('paquetes_id');
        });
    }
}
