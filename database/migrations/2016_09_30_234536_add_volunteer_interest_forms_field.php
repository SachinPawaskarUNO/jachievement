<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVolunteerInterestFormsField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('volunteer_interest_forms', function (Blueprint $table) {
            $table->string('mode_of_contact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('volunteer_interest_forms', function (Blueprint $table) {
            $table->dropColumn('modeOfContact');
        });
    }
}
