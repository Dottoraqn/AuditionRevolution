<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuditionRoleToAuditionApplicants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('production_company_show_audition_applicants', function (Blueprint $table) {
            //
            $table->integer('aud_role_id')->unsigned();
            $table->foreign('aud_role_id')->references('id')->on('production_company_show_audition_role')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('production_company_show_audition_applicants', function (Blueprint $table) {
            //
            $table->dropColumn('aud_role_id')->unsigned();
        });
    }
}
