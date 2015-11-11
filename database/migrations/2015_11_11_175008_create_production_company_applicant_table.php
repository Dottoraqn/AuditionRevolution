<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionCompanyApplicantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('production_company_applicant')) {
       Schema::create('production_company_applicant', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('audition_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('audtion_id')->references('id')->on('production_company_show_audition');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('production_company_applicant');
    }
}
