<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreColumnsToRecordsTable extends Migration
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
        $table->string('glucose')->nullable();
        $table->string('prescription')->nullable();
        $table->string('doc_comment')->nullable();
        $table->string('oxygen')->nullable();
        $table->string('fbs_rbs')->nullable();
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
            $table->dropColumn('glucose');
            $table->dropColumn('prescription');
            $table->dropColumn('doc_comment');
            $table->dropColumn('oxygen');
            $table->dropColumn('fbs_rbs');
        });
    }
}
