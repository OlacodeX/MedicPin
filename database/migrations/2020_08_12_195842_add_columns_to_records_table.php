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
            $table->string('oxygen')->nullable();
            $table->string('glucose')->nullable();
            $table->string('r_rate')->nullable();
            $table->string('BMI')->nullable();
            $table->text('note')->nullable();
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
            $table->dropColumn('oxygen');
            $table->dropColumn('glucose');
            $table->dropColumn('r_rate');
            $table->dropColumn('BMI');
            $table->dropColumn('note');
        });
    }
}
