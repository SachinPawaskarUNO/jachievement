<?php

namespace App\Http\Controllers;

use Log;
use Session;
use Auth;

use App\School;

class MapController extends Controller
{
    public function map()
    {
        Log::info('MapController.form: ');
        $this->viewData['heading'] = "Map";
        return view('aboutus.map', $this->viewData);
    }

    public function manageSchools() {
    	Log::info('MapController.manageSchools: Start -');

    	$this->middleware('role:admin');
    	$this->user = Auth::user();
    	$this->heading = "Schools";
    	$schools = School::all();

    	$this->viewData = ['user' => $this->user, 'schools' => $schools, 'heading' => $this->heading];

        return view('schools.index', $this->viewData);
    }
}

