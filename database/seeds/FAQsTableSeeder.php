<?php

use Illuminate\Database\Seeder;
use App\FAQ;

class FAQsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->delete();
        FAQ::create(['id'=>'1','question' => '','answer' => '','category' => '']);
        FAQ::create(['id'=>'2','question' => '','answer' => '','category' => '']);
        FAQ::create(['id'=>'3','question' => '','answer' => '','category' => '']);
        FAQ::create(['id'=>'4','question' => '','answer' => '','category' => '']);
        FAQ::create(['id'=>'5','question' => '','answer' => '','category' => '']);
        FAQ::create(['id'=>'6','question' => '','answer' => '','category' => '']);
        FAQ::create(['id'=>'7','question' => '','answer' => '','category' => '']);
        FAQ::create(['id'=>'8','question' => '','answer' => '','category' => '']);
        FAQ::create(['id'=>'9','question' => '','answer' => '','category' => '']);
        FAQ::create(['id'=>'10','question' => '','answer' => '','category' => '']);
        FAQ::create(['id'=>'11','question' => '','answer' => '','category' => '']);
        FAQ::create(['id'=>'12','question' => '','answer' => '','category' => '']);
    }
}
