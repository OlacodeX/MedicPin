<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToHMOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('h_m_o_s', function (Blueprint $table) {
            //
            $table->string('cat_id')->nullable();
            $table->string('img')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('h_m_o_s', function (Blueprint $table) {
            //
            $table->dropColumn('cat_id');
            $table->dropColumn('img');
        });
    }
}
