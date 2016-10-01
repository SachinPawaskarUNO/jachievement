<?php

use Illuminate\Database\Seeder;

use App\Grade;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->delete();
        Grade::create([  'name' => 'Elementary School Program']);
        Grade::create([  'name' => 'Middle School Program']);
        Grade::create([  'name' => 'High School Program']);


    }
}
