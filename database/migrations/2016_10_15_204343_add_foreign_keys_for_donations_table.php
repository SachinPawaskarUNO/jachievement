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
           
            $table->integer('team_id')->unsigned();
            $table->foreign('team_id')->references('teams')->on('id');
            
            $table->integer('campaign_id')->unsigned();
            $table->foreign('campaign_id')->references('campaigns')->on('id');
            
            $table->integer('teammember_id')->unsigned();
            $table->foreign('teammember_id')->references('team_members')->on('id');
            
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('states')->on('id');
            
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
            $table->dropForeign(['team_id','campaign_id','teammember_id', 'state_id']);
        });
        
    }
}
