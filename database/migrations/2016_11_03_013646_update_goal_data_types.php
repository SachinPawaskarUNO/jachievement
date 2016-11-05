<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateGoalDataTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('team_members', function ($table) {
            $table->decimal('goal', 10, 2)->change();
        });

        Schema::table('teams', function ($table) {
            $table->decimal('goal', 10, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('team_members', function ($table) {
            $table->integer('goal')->change();
        });

        Schema::table('teams', function ($table) {
            $table->integer('goal')->change();
        });
    }
}
