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
             // ->select(DB::raw('SUM(donations.amount) as sum,month(donations.created_at) as month'))
                ->select(DB::raw('SUM(donations.amount) as sum,EXTRACT(MONTH FROM TIMESTAMP 'donations.created_at') as month'))
             // ->where('year(donations.created_at)','=','2016')
               // ->where('year(donations.created_at)','=','2016')
           
             ->groupBy(DB::raw('month'))

             ->get();
// return $chart_data;
$data=array();

foreach($chart_data as $chart_values)
{
    $data[]=(array)$chart_values;

}
             $chart_results = array_column($data, 'sum');

             // return $chart_results;
//            $chart_data = json_encode($chart_results);
// return json_encode($chart_results);

        // return view('reports.donation',compact('donors'))->with('chart_results',json_encode($chart_results,JSON_NUMERIC_CHECK));
        return view('reports.donation',compact('donors'))->with('chart_results',json_encode($chart_results,JSON_NUMERIC_CHECK));

    }
}



// $users = DB::table('orders')
//                 ->select('department', DB::raw('SUM(price) as total_sales'))
//                 ->groupBy('department')
//                 ->havingRaw('SUM(price) > 2500')
//                 ->get();
