<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id');
            $table->float('amount');
            $table->date('date');
            $table->string('created_by')->default('System');
            $table->string('updated_by')->default('System');
            $table->integer('donor_id')->unsigned();
            $table->foreign('donor_id')->references('id')->on('donors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('donations');
    }
}
