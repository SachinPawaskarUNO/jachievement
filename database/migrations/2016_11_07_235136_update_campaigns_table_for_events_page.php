<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCampaignsTableForEventsPage extends Migration
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
            $table->dropColumn('start_date');
            $table->dropColumn('end_date');
            $table->dropColumn('active');
        });

        Schema::table('campaigns', function($table)
        {
            $table->string('image');
            $table->string('email');
            $table->string('phone');
            $table->date('event_date');
            $table->string('venue',2500);
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
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('active');
        });

        Schema::table('campaigns', function($table)
        {
            $table->dropColumn('image');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('event_date');
            $table->dropColumn('venue');
        });
    }
}
