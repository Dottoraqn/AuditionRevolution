<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionCompanyShowAuditionRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       Schema::create('production_company_show_audition_role', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('production_company_show_audition_id')->references('id')->on('production_company_show_audtion');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('character_name');
            $table->string('character_ethnicity');
            $table->string('character_sex');
            $table->string('character_height');
            $table->string('character_weight');
            $table->string('character_vocal_range');
            $table->integer('audition_role_state');
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
        Schema::drop('production_company_show_audition_role');
    }
}
