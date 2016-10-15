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
            $table->dropColumn('companyState');
            $table->dropColumn('homeState');

            $table->integer('companyStateId')->unsigned()->nullable();
            $table->foreign('companyStateId')->references('id')->on('states');

            $table->integer('homeStateId')->unsigned();
            $table->foreign('homeStateId')->references('id')->on('states');

        });

        Schema::table('educator_interest_forms', function (Blueprint $table) {
            $table->dropColumn('schoolState');

            $table->integer('schoolStateId')->unsigned();
            $table->foreign('schoolStateId')->references('id')->on('states');

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
            $table->dropForeign(['companyStateId']);
            $table->dropForeign(['homeStateId']);

            $table->string('companyState')->nullable();
            $table->string('homeState');
        });

        Schema::table('educator_interest_forms', function (Blueprint $table) {
            $table->dropForeign(['schoolStateId']);

            $table->string('schoolState');
        });
    }
}
