<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnInTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->integer('goal')->change();

        });

        Schema::table('team_members', function (Blueprint $table) {
            $table->integer('goal')->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->string('goal')->change();

        });

        Schema::table('team_members', function (Blueprint $table) {
            $table->string('goal')->change();

        });
    }
}
