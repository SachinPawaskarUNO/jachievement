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


        Program::create(['name' => 'Kindergarten','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image' => 'test','program_url' => 'test',
            'description' => 'test','grade_id' => '1', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

    }
}
