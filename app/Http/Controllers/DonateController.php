<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;

class DonateController extends Controller
{
    public function donate()
    {
        Log::info('DonateController.form: ');
        $this->viewData['heading'] = "Donation to Junior Achievement Omaha";
        return view('donation.donate', $this->viewData);

    }


}
