<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('receiver_id');
            $table->integer('sender_id');
            $table->string('sender_name');
            $table->string('receiver_name');
            $table->string('receiver_pin');
            $table->text('message');
            $table->string('status')->nullable()->default('unread');
            $table->integer('message_id')->nullable();
            $table->string('sender_email');
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
        Schema::dropIfExists('messages');
    }
}
