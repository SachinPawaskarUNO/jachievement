<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use DB;
use App\Http\Requests;
use DateTime;

class ReportsController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|superadmin');
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

         $chart_data= DB::table('donations')
             //->select(DB::raw('SUM(donations.amount) as sum,month(donations.created_at) as mon'))
             //    ->select(DB::raw('SUM(donations.amount) as sum, to_char(donations.created_at,\'Mon\') as mon'))
            ->select(DB::raw('SUM(donations.amount) as sum, EXTRACT(MONTH from donations.created_at) as mon'))
             // ->where('year(donations.created_at)','=','2016')
               // ->where('year(donations.created_at)','=','2016')
           
             ->groupBy(DB::raw('mon'))
             ->orderBy(DB::raw('mon', 'ASC'))
             ->get();


            $data=array();

            $month_results = array_column($data, 'sum');

            for ($i = 0; $i < 12; $i++) {
                $chart_months[] = 0;
                $chart_results[] = 0;
            } 

            foreach($chart_data as $chart_values)
            {
                $chart_results[$chart_values->mon - 1] = $chart_values->sum;
            }


        return view('reports.donation',compact('donors'))->with('chart_results',json_encode($chart_results))->with('chart_months',json_encode($chart_months));

    }
}



// $users = DB::table('orders')
//                 ->select('department', DB::raw('SUM(price) as total_sales'))
//                 ->groupBy('department')
//                 ->havingRaw('SUM(price) > 2500')
//                 ->get();
