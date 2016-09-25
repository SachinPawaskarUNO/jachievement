<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Log;

class EducatorsController extends Controller
{
    public function index()
    {

        Log::info('EducatorsController: ');
        $this->viewData['heading'] = "Bring Junior Acheivement to Your Classroom!";
        return view('educators.introduction', $this->viewData);
    }

    public function getInvolved()
    {

        Log::info('EducatorsController: ');
        $this->viewData['heading'] = "Bring Junior Acheivement to Your Classroom!";
        return view('get_Involved.getinvolved', $this->viewData);
    }
}
