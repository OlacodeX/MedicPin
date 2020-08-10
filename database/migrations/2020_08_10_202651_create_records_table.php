<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('pin');
            $table->string('gender');
            $table->string('doc_email');
            $table->string('doctor');
            $table->string('bp')->nullable();
            $table->string('temp')->nullable();
            $table->string('h_rate')->nullable();
            $table->string('b_group')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('genotype')->nullable();
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
        Schema::dropIfExists('records');
    }
}
