<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\VolunteerRequest;
use Log;
use App\VolunteerInterestForm;
use Session;
use Auth;

class ProgramController extends Controller
{
    public function program()
    {

        Log::info('ProgramController.form: ');
        $this->viewData['heading'] = "JA Program";


        $program = new Program();

        $this->viewData['programsData'] = $program->all(array('name','id'));

        return view('programs.index', $this->viewData);
    }
}
/**
 * Created by PhpStorm.
 * User: Ruiqi
 * Date: 9/25/2016
 * Time: 3:56 PM
 */