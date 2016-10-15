<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Log;
use Session;
use Auth;
use DB;
use Khill\Lavacharts\Lavacharts;

class ContributorController extends Controller
{

    public function index() {
        Log::info('ContributorController');

       /*$donations= DB::table('donations')
           ->join('donors', 'donors.id', '=')
            ->select(DB::raw('donations.amount as amount, donations.donor_id as donor'))
            ->orderBy('amount', 'desc')
            ->get();

        return $donations;
        $chartArray["chart"] = array("type" => 'pie','plotBackgroundColor' => NULL,'plotBorderWidth'=> NULL,'plotShadow'=> false );
        $chartArray["title"] = array("text" => 'Donation Chart Report');
        $chartArray["tooltip"] = array("pointFormat" => '{series.name}: {point.percentage:.1f}%');
        $chartArray["credits"] = array("enabled" => false);
        $chartArray["plotOptions"] = array(
            'pie' =>array(
                'allowPointSelect'=> true,
                'cursor'=>'pointer',
                'dataLabels'=>array(
                    'enabled'=>true,
                    'format'=> '{point.name}: {point.percentage:.1f} %',
                    'style'=>array(
                        'color'=>"(Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black' "
                    )
                ),
                'showInLegend'=> true
            )
        );

        $donorName = $donations->get();
        $totalDonation = $donations->sum('amount');
        $donorArrayContainer=[];
        $donorArray=[];
        foreach($donorName as $key->$value) {

            $donorArrayContainer["name"] = $value->donorName->name;
            $donorArrayContainer["percent"] = $value->amount/$totalDonation * 100;
            array_push($donorArray, $donorArrayContainer);
        }

        $chartArray["series"] = array(
            array(
                "name" => 'Donation Report',
                "colorByPoint" => true,
                "data" => $donorArray
            )
        );*/

        //return view('contributors.contributor')->with('chartArray', $chartArray);
        return view('contributors.contributor');
    }
}
