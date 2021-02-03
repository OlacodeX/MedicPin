<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreeColumnsToRecordsTable extends Migration
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
        $table->string('diabetes')->nullable();
        $table->string('epilepsy')->nullable();
        $table->string('hypertension')->nullable();
        $table->string('s_cell')->nullable();
        $table->string('allergies')->nullable();
        $table->string('other')->nullable();
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
            $table->dropColumn('diabetes');
            $table->dropColumn('epilepsy');
            $table->dropColumn('hypertension');
            $table->dropColumn('s_cell');
            $table->dropColumn('allergies');
            $table->dropColumn('other');
        });
    }
}
