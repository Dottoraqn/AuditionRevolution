<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionCompanyShowAudition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_company_show_audition', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('organizer_id')->unsigned();
            $table->foreign('organizer_id')->references('id')->on('users');
            $table->integer('show_id')->unsigned();
            $table->foreign('show_id')->references('id')->on('production_company_show')->onDelete('cascade');
            $table->string('name');
            $table->string('description');
            $table->string('location');
            $table->string('union');
            $table->string('email');
            $table->date('audition_date');
            $table->time('audition_time');
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
        Schema::drop('production_company_show_audition');
    }
}
