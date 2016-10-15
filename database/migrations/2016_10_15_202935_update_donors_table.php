<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donors', function ($table) {
         $table->renameColumn('lastName', 'last_name');
          $table->renameColumn('firstName', 'first_name');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::table('donors', function ($table) {
         $table->renameColumn('last_name', 'lastName');
          $table->renameColumn('first_name', 'firstName');
            });
    }
}
