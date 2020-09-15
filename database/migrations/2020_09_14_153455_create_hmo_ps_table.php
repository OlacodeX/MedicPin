<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHmoPsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hmo_ps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name')->nullable();
            $table->string('hmo')->nullable();
            $table->string('package_on')->nullable();
            $table->string('package_value')->nullable();
            $table->string('cat_id')->nullable();
            $table->string('added_by')->nullable();
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
        Schema::dropIfExists('hmo_ps');
    }
}
