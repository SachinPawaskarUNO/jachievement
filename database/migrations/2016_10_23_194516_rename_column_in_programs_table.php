<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnInProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('programs', function ($table) {
            $table->renameColumn('financial_rediness', 'financial_readiness');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('programs', function ($table) {
            $table->renameColumn('financial_readiness', 'financial_rediness');
        });
    }
}
