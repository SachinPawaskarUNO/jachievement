<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyInVolunteerInterestFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('volunteer_interest_forms', function (Blueprint $table) {

           $table->dropColumn('school_preference');
           $table->integer('school_preference_id')->unsigned()->nullable();
           $table->foreign('school_preference_id')->references('id')->on('schools');
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

            $table->string('school_preference')->nullable();
            $table->dropForeign(['school_preference_id']);
        });
    }
}
