<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAgeAndDescriptionToCharacterRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('production_company_show_audition_role', function (Blueprint $table) {
            $table->integer('character_age');
            $table->text('character_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('production_company_show_audition_role', function (Blueprint $table) {
            //
            $table->dropColumn('character_age');
            $table->dropColumn('character_description');
        });
    }
}
