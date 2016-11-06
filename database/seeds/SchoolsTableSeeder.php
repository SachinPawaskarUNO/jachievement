<?php

use Illuminate\Database\Seeder;

use App\School;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->delete();
        School::create(['school_name' => 'Pine Creek Elementary School','school_address' => '7801 N HWS Cleveland Blvd', 'school_city' => 'Bennington', 'school_state_id' => 28, 'school_zip' => '68007', 'school_latitude' => '41.330086', 'school_longitude' => '-96.167939', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Fire Ridge Elementary School','school_address' => '19660 Farnam St', 'school_city' => 'Elkhorn', 'school_state_id' => 28, 'school_zip' => '68022', 'school_latitude' => '41.258039', 'school_longitude' => '-96.2225479', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Hillside Elementary School','school_address' => '7500 Western Ave', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68114', 'school_latitude' => '41.271576', 'school_longitude' => '-96.029346', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Manchester Elementary School','school_address' => '2750 N HWS Cleveland Blvd', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68116', 'school_latitude' => '41.283851', 'school_longitude' => '-96.186273', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Sagewood Elementary School','school_address' => '4910 N 177th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68116', 'school_latitude' => '41.3032568', 'school_longitude' => '-96.1924904', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Skyline Elementary School','school_address' => '400 S 210th St', 'school_city' => 'Elkhorn', 'school_state_id' => 28, 'school_zip' => '68022', 'school_latitude' => '41.254594', 'school_longitude' => '-96.244623', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Spring Ridge Elementary School','school_address' => '17830 Shadow Ridge Dr', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68130', 'school_latitude' => '41.2449276', 'school_longitude' => '-96.1938537', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'West Bay Elementary School','school_address' => '3220 S 188th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68135', 'school_latitude' => '41.2293346', 'school_longitude' => '-96.2115295', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Cottonwood Elementary School','school_address' => '615 Piedmont Dr', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68154', 'school_latitude' => '41.2536246', 'school_longitude' => '-96.155475', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Gretchen Reeder Elementary School','school_address' => '19202 Chandler St', 'school_city' => 'Gretna', 'school_state_id' => 28, 'school_zip' => '68028', 'school_latitude' => '41.1842489', 'school_longitude' => '-96.2166169', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Hitchcock Elementary School','school_address' => '5809 S 104th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68127', 'school_latitude' => '41.1987866', 'school_longitude' => '-96.0761318', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Montclair Elementary School','school_address' => '2405 S 138th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68144', 'school_latitude' => '41.237778', 'school_longitude' => '-96.12774', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Rohwer Elementary School','school_address' => '17701 F St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68135', 'school_latitude' => '41.2184379', 'school_longitude' => '-96.1927942', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Beveridge Middle School','school_address' => '1616 S 120th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68144', 'school_latitude' => '41.242235', 'school_longitude' => '-96.102462', 'updated_at' => date_create(),'created_at'=>date_create()]);
        School::create(['school_name' => 'Central High School','school_address' => '124 N 20th St', 'school_city' => 'Omaha', 'school_state_id' => 28, 'school_zip' => '68102', 'school_latitude' => '41.2608485', 'school_longitude' => '-95.9436551', 'updated_at' => date_create(),'created_at'=>date_create()]);

    }
}
