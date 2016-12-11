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
        FAQ::create(['id'=>'1','question' => 'Do I have to know how to teach?','answer' => 'You do not need to have any teaching experience, just a willingness to work with young people. JA staff provides all the training necessary to teach your class. The materials provided include Program Guides with lesson plans and other support to help you have a successful experience. In addition, JA staff members are always available to help you through the process.','category' => 'volunteer']);
        FAQ::create(['id'=>'2','question' => 'Do I have to provide my own materials','answer' => 'No, all classroom materials are provided by Junior Achievement and are funded by contributions from businesses in the Chicago area as well as individual donors and community grants. All you provide is your time, life experience, and willingness to share your skills and expertise with local students. Feel free to explore our Resources section to see what materials come inside a program kit.','category' => 'volunteer']);
        FAQ::create(['id'=>'3','question' => 'What is the time commitment?','answer' => 'The time commitment varies based on what method of volunteering you will be doing. Check out our How It Works page to learn more about the different delivery methods. We know our volunteers have busy schedules, so we try to have something for everyone!','category' => 'volunteer']);
        FAQ::create(['id'=>'4','question' => 'Is training provided?','answer' => 'Yes, training is provided by the Junior Achievement Team. Participating in a training session is required for all new volunteers; and is highly encouraged for everyone. Our Volunteer Training provides you with invaluable perspective regarding what to expect, how to engage students and how to prepare for a successful teaching experience. The training takes approximately 1 hour. If you cannot attend your company scheduled training, contact your JA Volunteer Manager to make alternative arrangements. Conference call trainings are also available.','category' => 'volunteer']);
        FAQ::create(['id'=>'5','question' => 'What should I wear?','answer' => 'Business Casual or clothing that represents your company. We recommend comfortable shoes (not athletic shoes) and dressing in layers.','category' => 'volunteer']);
        FAQ::create(['id'=>'6','question' => 'What should I bring?','answer' => 'JA Kit with materials sorted -The JA “Guide For Teachers and Volunteer Guide” & your personal notes -Water bottle -Volunteer Information and Conduct Standards Form (if not already submitted)','category' => 'volunteer']);
        FAQ::create(['id'=>'7','question' => 'Will the teacher be in the classroom with me?','answer' => 'Your teacher is required by law to be present with you in the classroom at all times. The school may have other helping adults rotating throughout the classrooms, such as Para Educators and Specialists. Let your teacher know what kind of assistance would be most useful to you. The teacher serves as a second consultant, shares any information with you that will make the program run smoothly, assists in your presentations, and manages student behavior.','category' => 'volunteer']);
        FAQ::create(['id'=>'8','question' => 'I enjoyed my experience, how can I get involved in another JA program?','answer' => 'Junior Achievement programs happen throughout the school year and take place all throughout Omaha. To learn about specific opportunities in your area, contact your JA staff contact. Also consider getting involved in our Special Events. Please click on the events in the navigation bar. ','category' => 'volunteer']);
        FAQ::create(['id'=>'9','question' => 'How are Junior Achievement programs funded?','answer' => 'Our programs are free-of-charge to schools, teachers and students and are funded through donations from businesses, foundations and individuals. Please consider making a donation. You can donate through the Donate Now tab in the navigation bar.','category' => 'volunteer']);

    }
}
