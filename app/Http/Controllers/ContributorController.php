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
        return view('contributors.contributor');
    }
}
