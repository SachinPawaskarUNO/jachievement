<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;

class DonationController extends Controller
{
    public function donate()
    {
        Log::info('DonateController.form: ');
        $this->viewData['heading'] = "Donation to Junior Achievement Omaha";
        return view('donation.donate', $this->viewData);

    }


	public function notification()
    {
        Log::info('DonateController.form: ');
        $this->viewData['heading'] = "";
        return view('donation.notification', $this->viewData);

    }
}
