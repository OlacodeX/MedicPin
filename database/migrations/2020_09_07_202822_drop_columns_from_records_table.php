<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnsFromRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('records', function (Blueprint $table) {
            //
        $table->dropColumn('drug1');
        $table->dropColumn('drug2');
        $table->dropColumn('drug3');
        $table->dropColumn('drug4');
        $table->dropColumn('drug5');
        $table->dropColumn('drug6');
        $table->dropColumn('sickness1');
        $table->dropColumn('sickness2');
        $table->dropColumn('sickness3');
        $table->dropColumn('sickness4');
        $table->dropColumn('sickness5');
        $table->dropColumn('sickness6');
        $table->dropColumn('dosage1');
        $table->dropColumn('dosage2');
        $table->dropColumn('dosage3');
        $table->dropColumn('dosage4');
        $table->dropColumn('dosage5');
        $table->dropColumn('dosage6');
        $table->dropColumn('frequency1');
        $table->dropColumn('frequency2');
        $table->dropColumn('frequency3');
        $table->dropColumn('frequency4');
        $table->dropColumn('frequency5');
        $table->dropColumn('frequency6');
        $table->dropColumn('frequency1');
        $table->dropColumn('frequency2');
        $table->dropColumn('twitter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('records', function (Blueprint $table) {
            //
        });
    }
}
