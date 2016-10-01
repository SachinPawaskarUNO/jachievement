<?php

use Illuminate\Database\Seeder;

use App\Program;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->delete();
        Program::create([  'name' => 'Kindergarten', 'grade_id' => '1']);
        Program::create([  'name' => '1st', 'grade_id' => '1']);
        Program::create([  'name' => '2nd', 'grade_id' => '1']);
        Program::create([  'name' => '3rd', 'grade_id' => '1']);
        Program::create([  'name' => '4th', 'grade_id' => '1']);
        Program::create([  'name' => '5th', 'grade_id' => '1']);
        Program::create([  'name' => '6th', 'grade_id' => '1']);
        Program::create([  'name' => 'Kindergarten', 'grade_id' => '1']);
        Program::create([  'name' => 'JA Economics For Success', 'grade_id' => '2']);
        Program::create([  'name' => 'JA Global Marketplace', 'grade_id' => '2']);
        Program::create([  'name' => 'JA Its My Business ', 'grade_id' => '2']);
        Program::create([  'name' => 'JA Its My Future', 'grade_id' => '2']);
        Program::create([  'name' => 'JA Be Entrepreneurial', 'grade_id' => '3']);
        Program::create([  'name' => 'JA Career Success', 'grade_id' => '3']);
        Program::create([  'name' => 'JA Company Program', 'grade_id' => '3']);
        Program::create([  'name' => 'JA Economics (semester program)', 'grade_id' => '3']);
        Program::create([  'name' => 'JA Exploring Economics', 'grade_id' => '3']);
        Program::create([  'name' => 'JA Personal Finance', 'grade_id' => '3']);
        Program::create([  'name' => 'JA Titan', 'grade_id' => '3']);

    }
}
