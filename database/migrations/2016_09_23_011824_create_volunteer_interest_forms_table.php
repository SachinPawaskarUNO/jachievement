<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteerInterestFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_interest_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('schoolPreference');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('companyName');
            $table->string('companyAddress');
            $table->string('companyCity');
            $table->string('companyState');
            $table->string('companyZip');
            $table->string('companyPhone');
            $table->string('homePhone');
            $table->string('homeAddress');
            $table->string('homeCity');
            $table->string('homeState');
            $table->string('homeZip');
            $table->string('email')->unique();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('created_by')->default('System');
            $table->string('updated_by')->default('System');
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('volunteer_interest_forms');
    }
}
