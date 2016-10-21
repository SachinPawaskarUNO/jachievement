<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Http\Requests;

class ReportsController extends Controller
{
      
	public function DonationReporting()
	{
      Log::info('ReportsController: ');
        return view('reports.donation');
    }
}
