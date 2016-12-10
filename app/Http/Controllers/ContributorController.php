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

        $staticcontents= DB::table('static_contents')
          ->select(DB::raw('item, content'))
          ->where('page','=','Donors')
          ->get();
        $contents = array();

        foreach($staticcontents as $static) {
            $contents[$static->item] = $static->content;
        }

        Log::info('ContributorController');
        $this->viewData['contents'] = $contents;
        return view('contributors.contributor', $this->viewData);
    }
}
