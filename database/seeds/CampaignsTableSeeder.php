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
        Campaign::create(['id' => '1',  'name' => 'Golf', 'description' => 'Donate for Golf','goal'=> '$200','category' => 'Golf','start_date'=>'10/10/2016','end_date'=>'10/20/2016','active'=>'true',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Campaign::create([ 'id'=> '2', 'name' => 'Basketball', 'description' => 'Donate fo Basketball','goal'=>'$350','category' => 'Basketball','start_date'=>'11/15/2016','end_date'=>'11/20/2016','active'=>'true',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Campaign::create([  'id' => '3','name' => 'Soccer', 'description' => 'Donate for Soccer','goal'=> '$400','category' => 'Soccer','start_date'=>'12/01/2016','end_date'=>'12/10/2016','active'=>'true',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);

    }
}