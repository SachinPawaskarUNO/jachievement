<?php

use Illuminate\Database\Seeder;

use App\Organization;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizations')->delete();
        Organization::create(['id' => '1',  'name' => 'Union Pacific', 'url' => 'www.up.com',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),'updated_at' => date_create()]);
        Organization::create([ 'id'=> '2', 'name' => 'West', 'url' => 'www.west.com',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Organization::create([  'id' => '3','name' => 'Gallup', 'url' => 'www.gallup.com',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

    }
}