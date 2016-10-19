<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysForDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('donations', function (Blueprint $table) {
           
            $table->integer('team_id')->unsigned()->nullable();
            $table->foreign('team_id')->references('id')->on('teams');
            
            $table->integer('campaign_id')->unsigned()->nullable();
            $table->foreign('campaign_id')->references('id')->on('campaigns');
            
            $table->integer('team_member_id')->unsigned()->nullable();
            $table->foreign('team_member_id')->references('id')->on('team_members');
            
        });
        Schema::table('donors', function (Blueprint $table) {
            $table->integer('state_id')->unsigned()->nullable();
            $table->foreign('state_id')->references('id')->on('states');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->dropForeign(['team_id']);
            $table->dropForeign(['campaign_id']);
            $table->dropForeign(['team_member_id']);
        });
        Schema::table('donors', function (Blueprint $table) {
            $table->dropForeign(['state_id']);
        });
    }
}
