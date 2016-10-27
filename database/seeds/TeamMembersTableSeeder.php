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
        TeamMember::create([ 'goal' => 250,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create(),'user_id'=>'1','team_id'=>'1','title'=>'Welcome to My Page!','content'=>'Test content','user_id'=>'1', 'token'=>str_random(15)]);
        TeamMember::create([ 'goal' => 300,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create(),'user_id'=>'2','team_id'=>'2','title'=>'Welcome to My Page!','content'=>'Test content','user_id'=>'2', 'token'=>str_random(15)]);
        TeamMember::create([ 'goal' => 450,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create(),'user_id'=>'3','team_id'=>'3','title'=>'Welcome to My Page!','content'=>'Test content','user_id'=>'3', 'token'=>str_random(15)]);
    }
}
