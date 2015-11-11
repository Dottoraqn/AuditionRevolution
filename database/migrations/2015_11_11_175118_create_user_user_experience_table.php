<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUserExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_user_experience', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('user_resume')->references('id')->on('user_resume');
            $table->foreign('user_experience')->references('id')->on('user_experience');
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
        Schema::drop('user_user_experience');
    }
}
