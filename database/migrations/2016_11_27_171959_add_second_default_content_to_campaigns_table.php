<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSecondDefaultContentToCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campaigns', function($table)
        {
            $table->renameColumn('default_content', 'team_default_content');
            $table->string('team_member_default_content',4000)->nullable();
        });      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campaigns', function($table)
        {
            $table->renameColumn('team_default_content', 'default_content');
            $table->dropColumn('team_member_default_content');
        });     
    }
}
