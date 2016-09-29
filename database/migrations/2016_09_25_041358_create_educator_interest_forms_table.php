<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducatorInterestFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educator_interest_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('schoolName');
            $table->string('schoolPhone');
            $table->string('schoolAddress');
            $table->string('schoolCity');
            $table->string('schoolState');
            $table->string('schoolZip');
            $table->string('email');
            $table->string('grade');
            $table->string('programTheme');
            $table->string('planningTime');
            $table->string('cellphone');
            $table->string('commentsRequests');
            $table->string('noOfClasses');
            $table->string('noOfStudentsPerClass');
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
        Schema::drop('educator_interest_forms');
    }
}
