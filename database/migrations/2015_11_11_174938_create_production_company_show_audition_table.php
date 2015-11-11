<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionCompanyShowAuditionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('production_company_show_audition')) {
           Schema::create('production_company_show_audition', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->integer('production_company_show_id')->unsigned();
                $table->foreign('production_company_show_id')->references('id')->on('production_company_show');
                $table->foreign('user_id')->references('id')->on('users');
                $table->string('name');
                $table->string('description');
                $table->string('location');
                $table->string('union');
                $table->date('audition_date');
                $table->time('audition_time');
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
        Schema::drop('production_company_show_audtion');
    }
}
