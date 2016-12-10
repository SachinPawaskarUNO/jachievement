<?php

namespace App\Http\Controllers;

use Log;
use App\School;


class MapController extends Controller
{

    public function map()
    {

        $schools = School::all();
        $locations = collect();
        $num = 0;
        foreach($schools as $school) {
        	$school->map_name = 'Location' . $num;
        	$school->sequence_num = $num;
        	$num++;
        }

        Log::info('MapController.form: ');
        $this->viewData['heading'] = "Map";
        $this->viewData['schools'] = $schools;
        return view('aboutus.map', $this->viewData);
    }

}

