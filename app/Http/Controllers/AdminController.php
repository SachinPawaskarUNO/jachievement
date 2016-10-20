<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\EducatorInterestForm;
use Log;

class AdminController extends Controller
{
    public function __construct()
    {

        $this->middleware('role:admin');


        $this->educatorInterestForms = EducatorInterestForm::all();
        $this->heading = "Educator Interest Form";

        $this->viewData = ['educatorInterestForms' => $this->educatorInterestForms, 'heading' => $this->heading ];
    }
    public function listEducatorForm()
    {
        Log::info('EducatorInterestForm.index: ');
        $educatorInterestForms =  EducatorInterestForm::all();
        $this->viewData['educatorInterestForms'] = $educatorInterestForms;

        return view('admin.interest_form_index', $this->viewData);
    }
}
