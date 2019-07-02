<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPeriodoCantidadPersonas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cantidad_personas', function (Blueprint $table) {
            $table->text('periodo')->after('precio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cantidad_personas', function (Blueprint $table) {
            $table->dropColumn('periodo');
        });
    }
}
