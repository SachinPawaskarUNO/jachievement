<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\VolunteerRequest;
use Log;
use App\VolunteerInterestForm;
use Session;
use Auth;

class MapController extends Controller
{
    public function map()
    {

        Log::info('MapController.form: ');
        $this->viewData['heading'] = "Map";
        return view('aboutus.map', $this->viewData);
    }
}

