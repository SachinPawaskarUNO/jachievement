<?php

namespace App\Http\Controllers;

use Log;


class MapController extends Controller
{

    public function map()
    {
        Log::info('MapController.form: ');
        $this->viewData['heading'] = "Map";
        return view('aboutus.map', $this->viewData);
    }

}

