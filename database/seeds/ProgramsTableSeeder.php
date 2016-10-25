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
        Program::create(['name' => 'JA Ourselves','implementation' => 'Classroom-Based','entrepreneurship' => '1',
            'financial_readiness' => '2', 'work_readiness' => '1','image' => 'goo.gl/cGmmRE','program_url' => 'goo.gl/MzHVgp',
            'description' => 'JA Ourselves uses storybook characters in read-aloud and hands-on activities to introduce the role people play in an economy. Through engaging, volunteer-led activities, young students learn about individual choices, money, the importance of saving and giving, and the value of work. (Kindergarten)','grade_id' => '1', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => 'JA Our Families','implementation' => 'Classroom-Based','entrepreneurship' => '2',
            'financial_readiness' => '1', 'work_readiness' => '1','image' => 'https://www.juniorachievement.org/image/journal/article?img_id=94285&t=1384272421271','program_url' => 'https://www.juniorachievement.org/web/ja-usa/ja-programs?p_p_id=56_INSTANCE_abcd&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&p_p_col_id=ja-maincontent&p_p_col_count=1&_56_INSTANCE_abcd_groupId=14516&_56_INSTANCE_abcd_articleId=19271',
            'description' => 'JA Our Families explains how family members\' jobs and businesses contribute to the well-being of the family and of the community. The program introduces the concept of needs and wants and explores the ways families plan for and acquire goods and services. Students analyze their own skills to determine ways they can support their families. (Grade 1)','grade_id' => '1', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => 'JA Our Community','implementation' => 'Classroom-Based','entrepreneurship' => '0',
            'financial_readiness' => '1', 'work_readiness' => '2','image'=>'https://www.juniorachievement.org/image/journal/article?img_id=583384&t=1409266552926','program_url' => 'https://www.juniorachievement.org/web/ja-usa/ja-programs?p_p_id=56_INSTANCE_abcd&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&p_p_col_id=ja-maincontent&p_p_col_count=1&_56_INSTANCE_abcd_groupId=14516&_56_INSTANCE_abcd_articleId=19286',
            'description' => 'JA Our Community uses posters and games to offer practical information about businesses and the many jobs those businesses offer in a community. Students explore production methods through a simulation game, and they learn about taxes, decision making, and how money flows in an economy. (Grade 2)', 'grade_id' => '1',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => 'JA Our City','implementation' => 'Classroom-Based','entrepreneurship' => '1',
            'financial_readiness' => '2', 'work_readiness' => '1','image' => 'https://www.juniorachievement.org/image/journal/article?img_id=89097&t=1381784727455','program_url' => 'https://www.juniorachievement.org/web/ja-usa/ja-programs?p_p_id=56_INSTANCE_abcd&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&p_p_col_id=ja-maincontent&p_p_col_count=1&_56_INSTANCE_abcd_groupId=14516&_56_INSTANCE_abcd_articleId=19301',
            'description' => 'JA Our City introduces students to the characteristics of cities and how cities are shaped by zoning. Students also learn about the importance of money to a city; how financial institutions help businesses and city residents; and how the media is an integral part of a city\'s life. Students learn the role of an entrepreneur by exploring what it takes to open a restaurant. (Grade 3)','grade_id' => '1', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => 'JA Our Region','implementation' => ' Classroom-Based','entrepreneurship' => '2',
            'financial_readiness' => '1', 'work_readiness' => '1','image'=>'https://www.juniorachievement.org/image/journal/article?img_id=1958903&t=1469572165033','program_url' => 'https://www.juniorachievement.org/web/ja-usa/ja-programs?p_p_id=56_INSTANCE_abcd&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&p_p_col_id=ja-maincontent&p_p_col_count=1&_56_INSTANCE_abcd_groupId=14516&_56_INSTANCE_abcd_articleId=19331',
            'description' => 'JA Our Region introduces students to entrepreneurship and how entrepreneurs use resources to produce goods and services in a region. Students operate a hypothetical hot dog stand to understand the fundamental tasks performed by a business owner and to track the revenue and expenses of a business. (Grade 4)', 'grade_id' => '1',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => 'JA BizTown','implementation' => ' JA Capstone','entrepreneurship' => '2',
            'financial_readiness' => '2', 'work_readiness' => '2','image' => 'https://www.juniorachievement.org/image/journal/article?img_id=919310&t=1429216810345','program_url' => 'https://www.juniorachievement.org/web/ja-usa/ja-programs?p_p_id=56_INSTANCE_abcd&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&p_p_col_id=ja-maincontent&p_p_col_count=1&_56_INSTANCE_abcd_groupId=14516&_56_INSTANCE_abcd_articleId=19361',
            'description' => 'JA BizTown combines in-class learning with a day-long visit to a simulated town. This popular program allows elementary school students to operate banks, manage restaurants, write checks, and vote for mayor. The program helps students connect the dots between what they learn in school and the real world. (Grade 5)','grade_id' => '1', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => 'JA Our Nation','implementation' => 'Classroom-Based','entrepreneurship' => '1',
            'financial_readiness' => '0', 'work_readiness' => '2','image' => 'https://www.juniorachievement.org/image/journal/article?img_id=1357337&t=1444144211030','program_url' => 'https://www.juniorachievement.org/web/ja-usa/ja-programs?p_p_id=56_INSTANCE_abcd&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&p_p_col_id=ja-maincontent&p_p_col_count=1&_56_INSTANCE_abcd_groupId=14516&_56_INSTANCE_abcd_articleId=19346',
            'description' => 'JA Our Nation provides practical information about the need for employees who can meet the demands of the 21st century job market, particularly high-growth, high-demand jobs. By program\'s end, students will understand the skills, especially in science, technology, engineering, and math, that will make their futures brighter. (Grade 5)','grade_id' => '1', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => '6th','implementation' => 'test','entrepreneurship' => 'tesr',
            'financial_readiness' => 'test', 'work_readiness' => 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '1',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => 'JA Economics for Success','implementation' => 'Classroom-Based','entrepreneurship' => '0',
            'financial_readiness' => '2', 'work_readiness' => '2','image' => 'https://www.juniorachievement.org/image/journal/article?img_id=85313&t=1380827724463','program_url' => 'https://www.juniorachievement.org/web/ja-usa/ja-programs?p_p_id=56_INSTANCE_abcd&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&p_p_col_id=ja-maincontent&p_p_col_count=1&_56_INSTANCE_abcd_groupId=14516&_56_INSTANCE_abcd_articleId=19391',
            'description' => 'JA Economics for Success gives students the information needed to build strong personal finances, a cornerstone to a happy, secure life. Students learn the importance of exploring career options based on their skills, interests, and values. They also learn about spending money within a budget; saving and investing wisely; and using credit cautiously. (Grades 6-8)','grade_id' => '2', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => 'JA GLobal Market Place','implementation' => 'test','entrepreneurship' => 'tesr',
            'financial_readiness' => 'test', 'work_readiness' => 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '2',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => 'JA Its my Business','implementation' => 'test','entrepreneurship' => 'tesr',
            'financial_readiness' => 'test', 'work_readiness' => 'test','image' => 'test','program_url' => 'test',
            'description' => 'test','grade_id' => '2', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => 'JA Its my Future','implementation' => 'test','entrepreneurship' => 'tesr',
            'financial_readiness' => 'test', 'work_readiness' => 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '2',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => 'JA Be Entrepreneurial','implementation' => 'Classroom-Based','entrepreneurship' => '2',
            'financial_readiness' => '0', 'work_readiness' => '1','image' => 'https://www.juniorachievement.org/image/journal/article?img_id=627441&t=1411426933650','program_url' => 'https://www.juniorachievement.org/web/ja-usa/ja-programs?p_p_id=56_INSTANCE_abcd&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&p_p_col_id=ja-maincontent&p_p_col_count=1&_56_INSTANCE_abcd_groupId=14516&_56_INSTANCE_abcd_articleId=19466',
            'description' => 'JA Be Entrepreneurial challenges students, through interactive classroom activities, to start their own entrepreneurial venture while still in high school. The program provides useful, practical content to assist teens in the transition from being students to productive, contributing members of society. (Grades 9-12)','grade_id' => '3', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => 'JA Career Success','implementation' => 'Classroom-Based','entrepreneurship' => '1',
            'financial_readiness' => '0', 'work_readiness' => '2','image'=>'https://www.juniorachievement.org/image/journal/article?img_id=841808&t=1423783440358','program_url' => 'https://www.juniorachievement.org/web/ja-usa/ja-programs?p_p_id=56_INSTANCE_abcd&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&p_p_col_id=ja-maincontent&p_p_col_count=1&_56_INSTANCE_abcd_groupId=14516&_56_INSTANCE_abcd_articleId=55620',
            'description' => 'JA Career Success equips students with the knowledge required to get and keep a job in high-growth industries. Students will explore the crucial workplace skills employers seek but often find lacking in young employees. Students also will learn about valuable tools to find that perfect job, including resumes, cover letters, and interviewing techniques. (Grades 9-12)', 'grade_id' => '3',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => 'JA Company Program - Blended Model','implementation' => 'Classroom-Based','entrepreneurship' => '2',
            'financial_readiness' => '1', 'work_readiness' => '2','image' => 'https://www.juniorachievement.org/image/journal/article?img_id=2063266&t=1472837784165','program_url' => 'https://www.juniorachievement.org/web/ja-usa/ja-programs?p_p_id=56_INSTANCE_abcd&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&p_p_col_id=ja-maincontent&p_p_col_count=1&_56_INSTANCE_abcd_groupId=14516&_56_INSTANCE_abcd_articleId=581354',
            'description' => 'JA Company Program unlocks the innate ability in high school students to fill a need or solve a problem in their community by launching a business venture and unleashing their entrepreneurial spirit. The program focuses on Company Ops, the majority of meeting time, where students build and manage their business. Meeting-specific, student-friendly materials and resources increase student interaction and emphasize JA’s experiential approach to learning. (Grades 9-12)','grade_id' => '3', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => 'JA Economics (semester program)','implementation' => 'Classroom-Based','entrepreneurship' => '1',
            'financial_readiness' => '1', 'work_readiness' => '1','image'=>'https://www.juniorachievement.org/image/journal/article?img_id=85317&t=1380827832932','program_url' => 'https://www.juniorachievement.org/web/ja-usa/ja-programs?p_p_id=56_INSTANCE_abcd&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&p_p_col_id=ja-maincontent&p_p_col_count=1&_56_INSTANCE_abcd_groupId=14516&_56_INSTANCE_abcd_articleId=19526',
            'description' => 'JA Economics reinforces concepts of micro- and macro-economics by having students explore the basic characteristics of the U.S. economic system and how economic principles influence business decisions. It also introduces students to consumer issues, such as saving, investing, and taxation. (Grades 11-12)', 'grade_id' => '3',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => 'JA Exploring Economics','implementation' => 'Classroom-Based','entrepreneurship' => '1',
            'financial_readiness' => '1', 'work_readiness' => '1','image' => 'https://www.juniorachievement.org/image/journal/article?img_id=85321&t=1380827925561','program_url' => 'https://www.juniorachievement.org/web/ja-usa/ja-programs?p_p_id=56_INSTANCE_abcd&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&p_p_col_id=ja-maincontent&p_p_col_count=1&_56_INSTANCE_abcd_groupId=14516&_56_INSTANCE_abcd_articleId=19541',
            'description' => 'JA Exploring Economics uses hands-on activities to explain complex economic concepts such as supply and demand, inflation, and the production, distribution and consumption of goods. It gives insight into the effect governments and individuals have on the global economy— and on the price of a loaf of bread. (Grades 9-12)','grade_id' => '3', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

        Program::create(['name' => 'JA Personal Finance','implementation' => 'test','entrepreneurship' => 'tesr',
            'financial_readiness' => 'test', 'work_readiness' => 'test','image'=>'test','program_url' => 'test',
            'description' => 'test', 'grade_id' => '3',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(),
            'updated_at' => date_create()]);

        Program::create(['name' => 'JA Titan','implementation' => 'Classroom-Based','entrepreneurship' => '2',
            'financial_readiness' => '0', 'work_readiness' => '2','image' => 'https://www.juniorachievement.org/image/journal/article?img_id=883223&t=1426692704919','program_url' => 'https://www.juniorachievement.org/web/ja-usa/ja-programs?p_p_id=56_INSTANCE_abcd&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&p_p_col_id=ja-maincontent&p_p_col_count=1&_56_INSTANCE_abcd_groupId=14516&_56_INSTANCE_abcd_articleId=19601',
            'description' => 'JA Titan allows students to operate a virtual company through a Web-based simulation. The students\' success depends on decisions about their product\'s price and their company\'s marketing, research and development, and business practices. Win or lose, students gain an understanding of how management decisions affect a company\'s bottom line. (Grades 9-12)','grade_id' => '3', 'created_by' => 'System',
            'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

    }
}
