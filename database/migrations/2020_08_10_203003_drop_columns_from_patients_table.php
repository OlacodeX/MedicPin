<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnsFromPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            //
            $table->dropColumn('weight');
            $table->dropColumn('height');
            $table->dropColumn('genotype');
            $table->dropColumn('temp');
            $table->dropColumn('h_rate');
            $table->dropColumn('bp');
            $table->dropColumn('b_group');
            $table->dropColumn('doc_email');
            $table->dropColumn('doctor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            //
        });
    }
}
