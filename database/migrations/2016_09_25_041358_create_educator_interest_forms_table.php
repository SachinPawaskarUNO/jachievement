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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('school_name');
            $table->string('school_phone');
            $table->string('school_address');
            $table->string('school_city');
            $table->string('school_zip');
            $table->string('email');
            $table->string('grade')->nullable();
            $table->string('program_theme')->nullable();
            $table->string('planning_Time')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('commentsRequests')->nullable();
            $table->string('no_of_classes')->nullable();
            $table->string('no_of_students_per_class')->nullable();
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
