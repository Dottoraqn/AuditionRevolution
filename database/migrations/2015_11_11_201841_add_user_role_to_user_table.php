<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserRoleToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('user_role_type')) {
        Schema::create('user_role_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
        });}
        Schema::create('user_user_role_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_role_type')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_role_type')->references('id')->on('user_role_type');
            $table->foreign('user_id')->references('id')->on('users');
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
    }
}
