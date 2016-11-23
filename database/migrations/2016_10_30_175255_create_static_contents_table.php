<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaticContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('static_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('page', 100);
            $table->string('item', 100);
            $table->string('type', 100);
            $table->text('content');
            $table->text('default_content');
            $table->timestamps();
            $table->string('created_by')->default('System');
            $table->string('updated_by')->default('System');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('static_contents');
    }
}
