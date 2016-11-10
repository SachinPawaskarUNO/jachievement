<?php

use Illuminate\Database\Seeder;

use App\Donation;

class DonationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donations')->delete();
        Donation::create(['amount' => '200','created_at' => '2016-1-25 21:07:52','status'=>'paid','donor_id'=>'1']);
		Donation::create(['amount' => '500','created_at' => '2016-2-18 21:07:52','status'=>'pending','donor_id'=>'1']);
		Donation::create(['amount' => '240','created_at' => '2016-3-24 21:07:52','status'=>'canceled','donor_id'=>'1']);
		Donation::create(['amount' => '400','created_at' => '2016-4-23 21:07:52','status'=>'paid','donor_id'=>'1']);
		Donation::create(['amount' => '100','created_at' => '2016-5-18 21:07:52','status'=>'paid','donor_id'=>'1']);
		Donation::create(['amount' => '740','created_at' => '2016-6-13 21:07:52','status'=>'paid','donor_id'=>'1']);
		Donation::create(['amount' => '420','created_at' => '2016-7-01 21:07:52','status'=>'paid','donor_id'=>'1']);
		Donation::create(['amount' => '150','created_at' => '2016-8-12 21:07:52','status'=>'pending','donor_id'=>'1']);
		Donation::create(['amount' => '290','created_at' => '2016-9-15 21:07:52','status'=>'paid','donor_id'=>'1']);
		Donation::create(['amount' => '650','created_at' => '2016-10-13 21:07:52','status'=>'paid','donor_id'=>'1']);
		Donation::create(['amount' => '284','created_at' => '2016-11-09 21:07:52','status'=>'canceled','donor_id'=>'1']);
		Donation::create(['amount' => '732','created_at' => '2016-12-09 21:07:52','status'=>'paid','donor_id'=>'1']);
		Donation::create(['amount' => '923','created_at' => '2016-4-25 21:07:52','status'=>'paid','donor_id'=>'1']);
		Donation::create(['amount' => '321','created_at' => '2016-2-15 21:07:52','status'=>'paid','donor_id'=>'1']);
    }
}
