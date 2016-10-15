<?php

use Illuminate\Database\Seeder;

use App\Teammember;

class TeammembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teammembers')->delete();
        Teammember::create([ 'goal' => '$250', 
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create(),'user_id'=>'31','team_id'=>'1']);
        Teammember::create([ 'goal' => '$300', 
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create(),'user_id'=>'32','team_id'=>'2']);
        Teammember::create([ 'goal' => '$450', 
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create(),'user_id'=>'33','team_id'=>'3']);

    }
}
