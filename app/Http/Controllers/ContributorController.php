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
        $this->viewData['heading'] = "Contributor Introduction Page";

        $donors = \Lava::DataTable();

       /* $donations= DB::table('donations')
            ->select(DB::raw('donations.amount as amount, donations.donor_id as donor'))
            ->orderBy('amount', 'desc')
            ->get();


        $totalDonation = 1300;
        $donationArrayContainer=[];
        $donationArray=[];
        foreach($donations as $key->$value) {

            $donationArrayContainer["name"] = $value->$donations->organization_name;
             $donationArrayContainer["percent"] = $value/$totalDonation * 100;
            array_push($donationArray, $categoryArrayContainer);
        }*/


        $donors->addStringColumn('Donors')
            ->addNumberColumn('Percent')
            ->addRow(['Donor 2', 4])
             ->addRow(['Donor 3', 5])
            ->addRow(['Donor 4', 2])
             ->addRow(['Donor 5', 9])
        ->addRow(['Donor 1', 80]);
        /*foreach($donationArray as singleDonation) {

        $donors->addRow(['Donor 1', singleDonation]);
        }*/

        \Lava::PieChart('IMDB', $donors, [
            'title'  => 'Top 5 donors',
            'is3D'   => true,
            'slices' => [
                ['offset' => 0.2],
                ['offset' => 0.25],
                ['offset' => 0.3]
            ]
        ]);


        return view('contributors.contributor', $this->viewData);
    }
}
