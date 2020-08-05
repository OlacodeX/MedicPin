<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToPatientsTable extends Migration
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
            $table->string('bp')->nullable();
            $table->string('temp')->nullable();
            $table->string('h_rate')->nullable();
            $table->string('b_group')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('genotype')->nullable();
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
            $table->dropColumn('weight');
            $table->dropColumn('height');
            $table->dropColumn('genotype');
            $table->dropColumn('temp');
            $table->dropColumn('h_rate');
            $table->dropColumn('bp');
            $table->dropColumn('b_group');
        });
    }
}
