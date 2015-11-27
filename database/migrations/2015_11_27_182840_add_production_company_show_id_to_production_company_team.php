<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductionCompanyShowIdToProductionCompanyTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('production_company_team', function (Blueprint $table) {
            //
            $table->integer('production_company_show_id')->unsigned();
            $table->foreign('production_company_show_id')->references('id')->on('production_company_show')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('production_company_team', function (Blueprint $table) {
            //
            $table->dropColumn('production_company_show_id')->unsigned();
        });
    }
}
