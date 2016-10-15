<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;
use DB;


class DonateController extends Controller
{
    public function donate()
    {
        Log::info('DonateController.form: ');
        // $this->viewData['heading'] = "Donation to Junior Achievement Omaha";

        $donors= DB::table('donors')
                    ->select(DB::raw('lastName as lastName, firstName as firstName'))
                    ->get();

        return view('donation.donate', compact('donors'));
 

    }


	public function notification()
    {
        Log::info('DonateController.form: ');
        $this->viewData['heading'] = "";
        return view('donation.notification', $this->viewData);

    }

    // public function ticker()
    // {
    //     Log::info('DonateController.donate: ');
              

    // return view('donation.donate', compact('donors'));
    // }
}
