<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropAuditionRoleIdFromAuditionApplicants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('production_company_show_audition_applicants', function (Blueprint $table) {
            $table->dropColumn('audition_role_id');
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
            $table->string('audition_role_id');
        });
    }
}
