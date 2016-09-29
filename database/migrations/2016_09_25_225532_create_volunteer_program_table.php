<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteerProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_programs', function (Blueprint $table) {
            $table->integer('volunteerform_id')->unsigned();
            $table->integer('program_id')->unsigned();


            $table->foreign('volunteerform_id')->references('id')->on('volunteer_interest_forms');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->primary(['volunteerform_id', 'program_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('volunteer_programs');
    }
}
