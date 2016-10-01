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
        $table->increments('id');
        $table->string('name');
        $table->string('implementation');
        $table->string('enterpreneurship');
        $table->string('financial_rediness');
        $table->string('work_readiness');
        $table->string('image');
        $table->string('program_url');
        $table->string('description');

        DB::table('programs')->delete();
        Program::create([  'name' => 'Kindergarten','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test','grade_id' => '1']);
        Program::create([  'name' => '1st','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '1']);
        Program::create([  'name' => '2nd','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '1']);
        Program::create([  'name' => 'implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', '3rd', 'grade_id' => '1']);
        Program::create([  'name' => '4th', 'implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '1']);
        Program::create([  'name' => '5th','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '1']);
        Program::create([  'name' => '6th','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '1']);
        Program::create([  'name' => 'JA Economics For Success','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '2']);
        Program::create([  'name' => 'JA Global Marketplace','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '2']);
        Program::create([  'name' => 'JA Its My Business ','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '2']);
        Program::create([  'name' => 'JA Its My Future', 'implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test','grade_id' => '2']);
        Program::create([  'name' => 'JA Be Entrepreneurial','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '3']);
        Program::create([  'name' => 'JA Career Success','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '3']);
        Program::create([  'name' => 'JA Company Program','implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '3']);
        Program::create([  'name' => 'JA Economics (semester program)', 'implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test','grade_id' => '3']);
        Program::create([  'name' => 'JA Exploring Economics', 'implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '3']);
        Program::create([  'name' => 'JA Personal Finance', 'implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '3']);
        Program::create([  'name' => 'JA Titan', 'implementation' => 'test','enterpreneurship' => 'tesr',
            'financial_rediness' => 'test', 'work_rediness'=> 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '3']);

    }
}
