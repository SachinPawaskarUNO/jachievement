<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use DB;
use App\Http\Requests;

class ReportsController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }


	public function DonationReporting()
	{
      Log::info('ReportsController: ');
      $donors= DB::table('donors')
            ->join('donations','donors.id','=','donations.donor_id')
            ->select(DB::raw('donors.last_name as lastname,donors.first_name as firstname, 
                              donations.amount as amount,donations.status as status,donations.created_at'))
            
            ->orderBy('donations.created_at', 'DESC')
            ->get();


$donations = array(43, 433,2321);
// return $donations;

        // $donations= DB::table('donations')
        //     ->select(DB::raw('SUM(donations.amount) as sum'))
        //     // ->whereRaw('donations.created_at= ?', array(date('Y')))
        //     ->groupBy(DB::raw('month(donations.created_at)'))

        //     ->get();
        // $donations=array_column($donations, 'sum');
        // return $donations;

          // return $donation_sum;

        // ->whereRaw('year(`created_at`) = ?', array(date('Y')))





        return view('reports.donation',compact('donors','donation_sum',json_encode($donations)));
    }


}


// $users = DB::table('orders')
//                 ->select('department', DB::raw('SUM(price) as total_sales'))
//                 ->groupBy('department')
//                 ->havingRaw('SUM(price) > 2500')
//                 ->get();
