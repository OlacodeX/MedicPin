<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_pin');
            $table->string('sickness')->nullable();
            $table->string('drug')->nullable();
           // $table->string('drug2')->nullable();
            //$table->string('drug3')->nullable();
            //$table->string('drug4')->nullable();
            //$table->string('drug5')->nullable();
           // $table->string('drug6')->nullable();
            $table->string('dosage')->nullable();
            //$table->string('dosage2')->nullable();
            //$table->string('dosage3')->nullable();
            //$table->string('dosage4')->nullable();
           // $table->string('dosage5')->nullable();
            //$table->string('dosage6')->nullable();
            $table->string('frequency')->nullable();
            //$table->string('frequency2')->nullable();
            //$table->string('frequency3')->nullable();
            //$table->string('frequency4')->nullable();
            //$table->string('frequency5')->nullable();
            //$table->string('frequency6')->nullable();
            $table->string('sold_by')->nullable();
            $table->string('status')->default('Pending');
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
        Schema::dropIfExists('prescriptions');
    }
}
