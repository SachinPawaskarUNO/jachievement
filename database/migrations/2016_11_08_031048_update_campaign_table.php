<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCampaignTable extends Migration
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
            $table->dropColumn('goal');
            $table->string('default_content',4000)->nullable();
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
            $table->dropColumn('default_content');
        });     
    }
}
