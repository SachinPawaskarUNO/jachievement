<?php

use Illuminate\Database\Seeder;
use App\TeamMember;

class TeamMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_members')->delete();
        TeamMember::create([ 'goal' => '250',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create(),'user_id'=>'1','team_id'=>'1']);
        TeamMember::create([ 'goal' => '300',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create(),'user_id'=>'2','team_id'=>'2']);
        TeamMember::create([ 'goal' => '450',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create(),'user_id'=>'3','team_id'=>'3']);
    }
}
