<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionCompanyShowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_company_show', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('production_company_id')->unsigned();
            $table->foreign('production_company_id')->references('id')->on('production_company')->onDelete('cascade');
            $table->string('name');
            $table->string('description');
            $table->string('payment_type');
            $table->string('location');
            $table->string('website');
            $table->string('union');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::drop('production_company_show');
    }
}
