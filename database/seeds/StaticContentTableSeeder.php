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


        StaticContent::create(['page' => 'About Us',  'item' => 'Top Picture', 'type' => 'image',
            'content' => 'http://lyderis.eu/wp-content/uploads/2011/05/junior-achievement.jpg', 'default_content' => 'http://lyderis.eu/wp-content/uploads/2011/05/junior-achievement.jpg', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'Purpose', 'type' => 'text',
            'content' => 'Junior Achievement\'s Purpose is to inspire and prepare young people to succeed in a global economy.', 'default_content' => 'Junior Achievement\'s Purpose is to inspire and prepare young people to succeed in a global economy.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'Who We Are', 'type' => 'text',
            'content' => 'Junior Achievement is the world\'s largest organization dedicated to giving children the knowledge and skills they need to own their economic success, plan for their future, and make smart academic and economic choices. Junior Achievement programs are delivered by business and community volunteers and provide relevant, hands-on experiences that give students from kindergarten through high school the knowledge and skills in financial literacy, work readiness and entrepreneurship. Founded in 1919, Junior Achievement has operated programs in Omaha since 1962.', 'default_content' => 'Junior Achievement is the world\'s largest organization dedicated to giving children the knowledge and skills they need to own their economic success, plan for their future, and make smart academic and economic choices. Junior Achievement programs are delivered by business and community volunteers and provide relevant, hands-on experiences that give students from kindergarten through high school the knowledge and skills in financial literacy, work readiness and entrepreneurship. Founded in 1919, Junior Achievement has operated programs in Omaha since 1962.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'Core Value 1', 'type' => 'text', 'content' => 'Belief in the boundless potential of young people', 'default_content' => 'Belief in the boundless potential of young people', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'Core Value 2', 'type' => 'text', 'content' => 'Commitment to the principles of market-based economics and entrepreneurship', 'default_content' => 'Commitment to the principles of market-based economics and entrepreneurship', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'Core Value 3', 'type' => 'text', 'content' => 'Passion for what we do and honesty, integrity, and excellence in how we do it', 'default_content' => 'Passion for what we do and honesty, integrity, and excellence in how we do it', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'Core Value 4', 'type' => 'text', 'content' => 'Respect for the talents, creativity, perspectives, and backgrounds of all individuals', 'default_content' => 'Respect for the talents, creativity, perspectives, and backgrounds of all individuals', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'Core Value 5', 'type' => 'text', 'content' => 'Belief in the power of partnership and collaboration', 'default_content' => 'Belief in the power of partnership and collaboration', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'Core Value 6', 'type' => 'text', 'content' => 'Conviction in the educational and motivational impact of relevant, hands-on learning', 'default_content' => 'Conviction in the educational and motivational impact of relevant, hands-on learning', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'What Is Junior Achievement USA', 'type' => 'text', 'content' => 'We are the nation\'s largest organization dedicated to giving young people the knowledge and skills they need to own their economic success, plan for their futures, and make smart academic and economic choices. Junior Achievement\'s programs—in the core content areas of work readiness, entrepreneurship and financial literacy—ignite the spark in young people to experience and realize the opportunities and realities of work and life in the 21st century.', 'default_content' => 'We are the nation\'s largest organization dedicated to giving young people the knowledge and skills they need to own their economic success, plan for their futures, and make smart academic and economic choices. Junior Achievement\'s programs—in the core content areas of work readiness, entrepreneurship and financial literacy—ignite the spark in young people to experience and realize the opportunities and realities of work and life in the 21st century.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'Proven Success', 'type' => 'text', 'content' => 'Junior Achievement is one of a few nonprofits to use independent, third-party evaluators to gauge the impact of its programs. Since 1993, independent evaluators have conducted studies on Junior Achievement\'s effectiveness. Findings prove that Junior Achievement has a positive impact in a number of critical areas. We invite you to read the Programs Evaluation Results.', 'default_content' => 'Junior Achievement is one of a few nonprofits to use independent, third-party evaluators to gauge the impact of its programs. Since 1993, independent evaluators have conducted studies on Junior Achievement\'s effectiveness. Findings prove that Junior Achievement has a positive impact in a number of critical areas. We invite you to read the Programs Evaluation Results.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'Purpose', 'type' => 'text', 'content' => 'Junior Achievement\'s purpose is to inspire and prepare young people to succeed in a global economy.', 'default_content' => 'Junior Achievement\'s purpose is to inspire and prepare young people to succeed in a global economy.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'Program Reach', 'type' => 'text', 'content' => 'Junior Achievement USA reaches more than 4.6 million students per year in 201,444 classrooms and after-school locations. Junior Achievement programs are taught by volunteers in inner cities, suburbs, and rural areas throughout the United States, by 112 Area Offices in all 50 states.', 'default_content' => 'Junior Achievement USA reaches more than 4.6 million students per year in 201,444 classrooms and after-school locations. Junior Achievement programs are taught by volunteers in inner cities, suburbs, and rural areas throughout the United States, by 112 Area Offices in all 50 states.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'A Brief History', 'type' => 'text', 'content' => 'Junior Achievement was founded in 1919 by Theodore Vail, president of American Telephone & Telegraph; Horace Moses, president of Strathmore Paper Co.; and Senator Murray Crane of Massachusetts. Its first program, Junior Achievement Company Program®, was offered to high school students on an after-school basis. In 1975, the organization entered the classroom with the introduction of Project Business for the middle grades. Over the last 39 years, Junior Achievement has expanded its activities and broadened its scope to include in-school and after-school students.', 'default_content' => 'Junior Achievement was founded in 1919 by Theodore Vail, president of American Telephone & Telegraph; Horace Moses, president of Strathmore Paper Co.; and Senator Murray Crane of Massachusetts. Its first program, Junior Achievement Company Program®, was offered to high school students on an after-school basis. In 1975, the organization entered the classroom with the introduction of Project Business for the middle grades. Over the last 39 years, Junior Achievement has expanded its activities and broadened its scope to include in-school and after-school students.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'Leadership', 'type' => 'text', 'content' => 'Ms. Julie Monaco, Global Head of Citi\'s Public Sector Group in the Corporate and Investment Banking division of Citi\'s Institutional Clients Group, is chairwoman of the Junior Achievement USA board of directors. Jack E. Kosakowski is the president and chief executive officer of Junior Achievement. Junior Achievement USA board members represent a wide range of businesses and academic institutions around the world. In addition, approximately 4,400 board members lead Junior Achievement Area Offices around the United States.', 'default_content' => 'Ms. Julie Monaco, Global Head of Citi\'s Public Sector Group in the Corporate and Investment Banking division of Citi\'s Institutional Clients Group, is chairwoman of the Junior Achievement USA board of directors. Jack E. Kosakowski is the president and chief executive officer of Junior Achievement. Junior Achievement USA board members represent a wide range of businesses and academic institutions around the world. In addition, approximately 4,400 board members lead Junior Achievement Area Offices around the United States.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'Organization Overview', 'type' => 'text', 'content' => 'Junior Achievement USA is headquartered in Colorado Springs, Colorado, and provides strategic direction, leadership, and support to approximately 1,500 employees throughout the United States. Local volunteer boards of directors comprised of business, education, and civic leaders set the policy and direction for each local office.', 'default_content' => 'Junior Achievement USA is headquartered in Colorado Springs, Colorado, and provides strategic direction, leadership, and support to approximately 1,500 employees throughout the United States. Local volunteer boards of directors comprised of business, education, and civic leaders set the policy and direction for each local office.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        StaticContent::create(['page' => 'About Us',  'item' => 'Volunteers', 'type' => 'text', 'content' => 'Junior Achievement\'s 218,896 classroom volunteers come from all walks of life, including: business people, college students, parents and retirees. These dedicated individuals are the backbone of our organization.', 'default_content' => 'Junior Achievement\'s 218,896 classroom volunteers come from all walks of life, including: business people, college students, parents and retirees. These dedicated individuals are the backbone of our organization.', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);











        StaticContent::create(['page' => 'About Us',  'item' => 'STUFF', 'type' => 'text', 'content' => 'STUFF', 'default_content' => 'STUFF', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

    }
}



    