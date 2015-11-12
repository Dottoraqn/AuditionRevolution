<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeProductionCompanyTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('production_company_team', function ($table) {
            $table->dropColumn('production_company_id');
            $table->integer('audition_id')->unsigned();
            $table->foreign('audition_id')->references('id')->on('production_company_show_audition');
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
