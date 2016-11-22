<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreateByForCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function ($table) {
        $table->string('created_by')->default('System')->change();
        $table->string('updated_by')->default('System')->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('comments', function ($table) {
          $table->string('created_by')->change();
        $table->string('updated_by')->change(); 
         });
    }
}
