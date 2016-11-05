<?php

use Illuminate\Database\Seeder;

use App\Campaign;

class CampaignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campaigns')->delete();
        //Campaign::create(['id' => '1',  'name' => 'JA Omaha Golf Campaign - 2016', 'description' => 'Donate for Golf','goal'=> '200','category' => 'Golf','start_date'=>'10/10/2016','end_date'=>'10/20/2016','active'=>'true',            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        //Campaign::create([ 'id'=> '2', 'name' => 'JA Omaha Bowling Campaign - 2016', 'description' => 'Donate for Bowling','goal'=>'350','category' => 'Bowling','start_date'=>'11/15/2016','end_date'=>'11/20/2016','active'=>'true','created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        //Campaign::create([  'id' => '3','name' => 'JA Omaha Soccer Campaign - 2016', 'description' => 'Donate for Soccer','goal'=> '400','category' => 'Soccer','start_date'=>'12/01/2016','end_date'=>'12/10/2016','active'=>'true','created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
			
		Campaign::create(['id' => '1',  'name' => 'Junior Achievement Omaha Golf Campaign - 2016', 'description' => 'Golf Challenge is a event to reach individual and additional business sponsors. A field of 40 golfers set a goal to raise $2,500 each and golf 100 holes in a day. The individuals secure pledges based on number of holes or a set amount. Each board member is asked to recruit an avid golfer who has the ability to rise $2500 from individuals or business contacts. Ideally, the board member would be a golfer.','goal'=> '2500','start_date'=>'10/01/2016','end_date'=>'11/30/2016','active'=>'true','created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
		
        Campaign::create([ 'id'=> '2', 'name' => 'Junior Achievement Omaha Bowling Campaign - 2016', 'description' => 'Bowling Classic is a special event targeted to reach individual contributors for Junior Achievement. Teams of five individuals secure pledges based on per pin or a set amount and bowl two games during a specific time.  Each bowler is asked to raise $110 in pledges. Bowlers receive gift certificates based on the money raised. Many companies view this as a fun, team building experience for employees for a worthwhile organization. Each board member is asked to identify an individual from their company to coordinate their teams. Ideally, the board member would also put together a team and bowl.','goal'=>'2500','start_date'=>'05/01/2016','end_date'=>'05/31/2016','active'=>'true','created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
       
//	   Campaign::create([  'id' => '3','name' => 'Junior Achievement Omaha Soccer Campaign - 2016', 'description' => 'Donate for our Soccer Campaign','goal'=> '400','start_date'=>'12/01/2016','end_date'=>'12/10/2016','active'=>'true','created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

    }
}