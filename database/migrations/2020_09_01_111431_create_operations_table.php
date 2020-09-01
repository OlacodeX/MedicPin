<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_name');
            $table->string('type');
            $table->string('disease');
            $table->string('doc_1');
            $table->string('doc_2')->nullable();
            $table->string('doc_3')->nullable();
            $table->string('doc_4')->nullable();
            $table->string('doc_5')->nullable();
            $table->string('docname_1');
            $table->string('docname_2')->nullable();
            $table->string('docname_3')->nullable();
            $table->string('docname_4')->nullable();
            $table->string('docname_5')->nullable();
            $table->string('added_by');
            $table->string('addedBy_pin');
            $table->string('report')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('operations');
    }
}
