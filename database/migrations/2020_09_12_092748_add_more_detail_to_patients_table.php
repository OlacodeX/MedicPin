<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreDetailToPatientsTable extends Migration
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
            $table->string('occupation')->nullable();
            $table->string('cc')->nullable();
            $table->string('nok')->nullable();
            $table->string('nok_phone')->nullable();
            $table->string('nok_relation')->nullable();
            $table->string('status')->nullable();
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
            $table->dropColumn('occupation');
 
            $table->dropColumn('cc');
 
            $table->dropColumn('nok');
 
            $table->dropColumn('nok_phone'); 
            $table->dropColumn('nok_relation');
 
            $table->dropColumn('status');
 
        });
    }
}
