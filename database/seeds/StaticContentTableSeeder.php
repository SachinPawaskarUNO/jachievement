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
            'content' => 'http://i.imgur.com/B9J0WSl.jpg', 'default_content' => 'images/rochester2016.jpg', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        StaticContent::create(['page' => 'Home Page',  'item' => 'Top Description Box', 'type' => 'text',
            'content' => 'Junior Achievement\'s volunteer-delivered, kindergarten-12th grade programs foster work-readiness, entrepreneurshipand financial literacy skills, and use experiential learning to inspire students to dream big and reach their potential.', 'default_content' => 'Junior Achievement\'s volunteer-delivered, kindergarten-12th grade programs foster work-readiness, entrepreneurshipand financial literacy skills, and use experiential learning to inspire students to dream big and reach their potential.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        StaticContent::create(['page' => 'Home Page',  'item' => 'Why JA? Description', 'type' => 'text',
            'content' => 'Junior Achievement helps students realize that the education they are getting today will help them to have a bright future tomorrow. Junior Achievement\'s unique, volunteer delivered programs, show them all of the possibilities that lay before them. They realize they can choose different paths; College? A specific trade? Start their own business? Through your participation as an organization or as an individual, these statistics below can begin to change in your community:', 'default_content' => 'Junior Achievement helps students realize that the education they are getting today will help them to have a bright future tomorrow. Junior Achievement\'s unique, volunteer delivered programs, show them all of the possibilities that lay before them. They realize they can choose different paths; College? A specific trade? Start their own business? Through your participation as an organization or as an individual, these statistics below can begin to change in your community:', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        StaticContent::create(['page' => 'Home Page',  'item' => 'Why JA? Picture', 'type' => 'image',
            'content' => 'images/two-cols-classroom_sm.jpg', 'default_content' => 'images/two-cols-classroom_sm.jpg', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        StaticContent::create(['page' => 'Home Page',  'item' => 'Why JA? Fact 1', 'type' => 'text',
            'content' => '20% of U.S. students will not complete high school on time and earn a diploma.', 'default_content' => '20% of U.S. students will not complete high school on time and earn a diploma.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        StaticContent::create(['page' => 'Home Page',  'item' => 'Why JA? Fact 2', 'type' => 'text',
            'content' => '49% of U.S. employers recognize that talent shortages impact their ability to serve clients and customers.', 'default_content' => '49% of U.S. employers recognize that talent shortages impact their ability to serve clients and customers.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        StaticContent::create(['page' => 'Home Page',  'item' => 'Why JA? Fact 3', 'type' => 'text',
            'content' => '36% of Americans say that they have at some point in their lives felt their financial situation was out of control.', 'default_content' => '36% of Americans say that they have at some point in their lives felt their financial situation was out of control.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        StaticContent::create(['page' => 'Home Page',  'item' => 'Why JA? Fact 4', 'type' => 'text',
            'content' => '91% of millennials wish they had greater access to entrepreneurial education programs.', 'default_content' => '91% of millennials wish they had greater access to entrepreneurial education programs.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        StaticContent::create(['page' => 'Home Page',  'item' => 'Video', 'type' => 'text',
            'content' => 'https://www.youtube.com/embed/4L49IjKV6po', 'default_content' => 'https://www.youtube.com/embed/4L49IjKV6po', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}



    