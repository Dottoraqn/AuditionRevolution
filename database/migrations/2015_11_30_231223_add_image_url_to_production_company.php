<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageUrlToProductionCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('production_company_show', function (Blueprint $table) {
            //
            $table->text('show_banner_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('production_company_show', function (Blueprint $table) {
            //
            $table->dropColumn('show_banner_url');
        });
    }
}
