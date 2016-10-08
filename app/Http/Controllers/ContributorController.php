<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Log;
use Session;
use Auth;
use DB;

class ContributorController extends Controller
{

    public function index() {
        Log::info('ContributorController');
        $this->viewData['heading'] = "Contributor Introduction Page";
        return view('contributors.contributor', $this->viewData);
    }
}
