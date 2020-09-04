<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToRecordsTable extends Migration
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
            $table->string('sickness1')->nullable();
            $table->string('sickness2')->nullable();
            $table->string('sickness3')->nullable();
            $table->string('sickness4')->nullable();
            $table->string('sickness5')->nullable();
            $table->string('sickness6')->nullable();
            $table->string('drug1')->nullable();
            $table->string('drug2')->nullable();
            $table->string('drug3')->nullable();
            $table->string('drug4')->nullable();
            $table->string('drug5')->nullable();
            $table->string('drug6')->nullable();
            $table->string('dosage1')->nullable();
            $table->string('dosage2')->nullable();
            $table->string('dosage3')->nullable();
            $table->string('dosage4')->nullable();
            $table->string('dosage5')->nullable();
            $table->string('dosage6')->nullable();
            $table->string('frequency1')->nullable();
            $table->string('frequency2')->nullable();
            $table->string('frequency3')->nullable();
            $table->string('frequency4')->nullable();
            $table->string('frequency5')->nullable();
            $table->string('frequency6')->nullable();
            $table->text('doc_comment')->nullable();
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
