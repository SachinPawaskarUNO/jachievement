<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name');
            $table->string('school_address')->nullable();
            $table->string('school_city')->nullable();
            $table->integer('school_state_id')->unsigned()->nullable();
            $table->string('school_zip',10)->nullable();
            $table->string('school_phone')->nullable();
            $table->string('school_latitude')->nullable();
            $table->string('school_longitude')->nullable();

            $table->boolean('active')->default(true);
            $table->string('created_by')->default('System');
            $table->string('updated_by')->default('System');
            $table->timestamps();
            $table->softDeletes();

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
        Schema::drop('users');
    }
}
