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
        Grade::create(['id' => '1',  'name' => 'Elementary School Program', 'description' => 'Elementary School',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Grade::create([ 'id'=> '2', 'name' => 'Middle School Program', 'description' => 'Middle School',
        'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Grade::create([  'id' => '3','name' => 'High School Program', 'description' => 'High School',
        'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

    }
}
