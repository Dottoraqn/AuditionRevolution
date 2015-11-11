<?php

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
        //
       Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('sender_id')->references('id')->on('users');
            $table->foreign('receiving_id')->references('id')->on('users');
            $table->foreign('annotator_id')->references('id')->on('users');
            $table->string('message_subject');
            $table->text('message_body');
            $table->integer('message_state');
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
        //
        Schema::drop('messages');
    }
}
