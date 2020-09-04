<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_name');
            $table->string('patient_pin');
            $table->string('test_name1');
            $table->string('test_name2')->nullable();
            $table->string('test_name3')->nullable();
            $table->string('test_name4')->nullable();
            $table->string('test_name5')->nullable();
            $table->string('doc_name');
            $table->string('doc_pin');
            $table->string('carriedout_by')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('labs');
    }
}
