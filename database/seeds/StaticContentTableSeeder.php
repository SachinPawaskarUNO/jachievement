<?php

use Illuminate\Database\Seeder;
use App\StaticContent;

class StaticContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('static_contents')->delete();
        StaticContent::create(['page' => 'Home Page',  'item' => 'Top Picture', 'type' => 'image',
            'content' => 'images/rochester2016.jpg', 'default_content' => 'images/rochester2016.jpg', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        StaticContent::create(['page' => 'Home Page',  'item' => 'Why JA? Picture', 'type' => 'image',
            'content' => 'images/two-cols-classroom_sm.jpg', 'default_content' => 'images/two-cols-classroom_sm.jpg', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        StaticContent::create(['page' => 'Home Page',  'item' => 'Top Description Box', 'type' => 'text',
            'content' => 'Welcome to JA!', 'default_content' => 'Welcome to JA!', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        StaticContent::create(['page' => 'Home Page',  'item' => 'Why JA? Fact 1', 'type' => 'text',
            'content' => '20% of U.S. students will not complete high school on time and earn a diploma.', 'default_content' => '20% of U.S. students will not complete high school on time and earn a diploma.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}



    