<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTipoPagoAbonosFiesta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abonos_fiesta', function (Blueprint $table) {
            $table->text('tipoPago')->nullable()->after('abonos_id');
            $table->text('pinConfirmacion')->nullable()->after('tipoPago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abonos_fiesta', function (Blueprint $table) {
            $table->dropColumn('tipoPago');
            $table->dropColumn('pinConfirmacion');
        });
    }
}
