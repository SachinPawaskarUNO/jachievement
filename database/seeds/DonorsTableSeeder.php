<?php

use Illuminate\Database\Seeder;

use App\Donor;

class DonorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donors')->delete();
        Donor::create(['id'=>'1','first_name' => 'John','last_name' => 'Dave','email' => 'john@test.com']);
    }
}
