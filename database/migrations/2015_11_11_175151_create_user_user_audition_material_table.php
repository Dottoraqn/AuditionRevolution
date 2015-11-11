<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUserAuditionMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('production_company_show_audition_user_applicant')) {
        Schema::create('user_user_audition_material', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('user_audition_material')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_audition_material')->references('id')->on('user_audition_material');
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('user_user_audition_material');
    }
}
