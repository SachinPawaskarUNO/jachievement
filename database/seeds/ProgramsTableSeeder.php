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

        Program::create(['name' => '1st','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image' => 'test','program_url' => 'test',
            'description' => 'test','grade_id' => '1', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => '2nd','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '1',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => '3rd','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image' => 'test','program_url' => 'test',
            'description' => 'test','grade_id' => '1', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => '4th','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '1',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => '5th','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image' => 'test','program_url' => 'test',
            'description' => 'test','grade_id' => '1', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => '6th','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '1',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => 'JA Economics for Success','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image' => 'test','program_url' => 'test',
            'description' => 'test','grade_id' => '2', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => 'JA GLobal Market Place','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '2',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => 'JA Its my Businness','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image' => 'test','program_url' => 'test',
            'description' => 'test','grade_id' => '2', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => 'JA Its my Future','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '2',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => 'JA Be Entrepreneurial','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image' => 'test','program_url' => 'test',
            'description' => 'test','grade_id' => '3', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => 'JA Career Success','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '3',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => 'JA Company Program','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image' => 'test','program_url' => 'test',
            'description' => 'test','grade_id' => '3', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => 'JA Economics (semester program)','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '3',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => 'JA Exploring Economics','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image' => 'test','program_url' => 'test',
            'description' => 'test','grade_id' => '3', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => 'JA Personal Finance','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '3',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);
        Program::create(['name' => 'JA Titan','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_readiness' => 'test','image' => 'test','program_url' => 'test',
            'description' => 'test','grade_id' => '3', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

    }
}
