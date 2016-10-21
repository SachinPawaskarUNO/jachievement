<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyForStates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('volunteer_interest_forms', function (Blueprint $table) {
            $table->integer('company_state_id')->unsigned()->nullable();
            $table->foreign('company_state_id')->references('id')->on('states');

            $table->integer('home_state_id')->unsigned();
            $table->foreign('home_state_id')->references('id')->on('states');

        });

        Schema::table('educator_interest_forms', function (Blueprint $table) {
            $table->integer('school_state_id')->unsigned();
            $table->foreign('school_state_id')->references('id')->on('states');

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
            $table->dropForeign(['company_state_id']);
            $table->dropForeign(['home_state_id']);
        });

        Schema::table('educator_interest_forms', function (Blueprint $table) {
            $table->dropForeign(['school_state_id']);
        });
    }
}
