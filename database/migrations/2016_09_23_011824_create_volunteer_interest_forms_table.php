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
            $table->string('schoolPreference')->nullable();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('companyName')->nullable();
            $table->string('companyAddress')->nullable();
            $table->string('companyCity')->nullable();
            $table->string('companyZip')->nullable();
            $table->string('companyPhone')->nullable();
            $table->string('homePhone');
            $table->string('homeAddress');
            $table->string('homeCity');
            $table->string('homeZip');
            $table->string('email');
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
