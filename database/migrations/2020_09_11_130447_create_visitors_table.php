<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cc')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('pin')->nullable();
            $table->string('gender')->nullable();
            $table->date('date')->nullable();
            $table->string('number')->nullable();
            $table->string('patient_pin')->nullable();
            $table->string('patient_name')->nullable();
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
        Schema::dropIfExists('visitors');
    }
}
