<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionCompanyShowAuditionUserApplicantTable extends Migration
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
       Schema::create('production_company_show_audition_user_applicant', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('audition_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('annotator_id')->unsigned();
            $table->foreign('audition_id')->references('id')->on('production_company_show_audtion');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('annotator_id')->references('id')->on('users');
            $table->text('annotations');
            $table->integer('audition_role_state');
            $table->timestamps();
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
        Schema::drop('production_company_show_audition_user_applicant');
    }
}
