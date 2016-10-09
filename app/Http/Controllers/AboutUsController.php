<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\VolunteerRequest;
use Log;
use App\VolunteerInterestForm;
use Session;
use Auth;

class AboutUsController extends Controller
{
    public function aboutus()
    {

        Log::info('ProgramController.form: ');
        $this->viewData['heading'] = "About Us";
        return view('aboutus.index', $this->viewData);
    }
}

