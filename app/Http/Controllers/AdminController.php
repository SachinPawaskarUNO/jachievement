<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\EducatorInterestForm;
use App\VolunteerInterestForm;
use Log;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
        $this->educatorInterestForms = EducatorInterestForm::all();

        $this->viewData = ['educatorInterestForms' => $this->educatorInterestForms ];
    }
    public function listEducatorForm()
    {
        Log::info('AdminController.listEducatorForm: ');
        $educatorInterestForms =  EducatorInterestForm::all();
        $this->viewData['educatorInterestForms'] = $educatorInterestForms;

        return view('admin.educator_form_index', $this->viewData);
    }
    public function listVolunteerForm()
    {
        Log::info('AdminController.listEducatorForm: ');
        $volunteerInterestForms =  VolunteerInterestForm::all();
        $this->viewData['volunteerInterestForms'] = $volunteerInterestForms;

        return view('admin.volunteer_form_index', $this->viewData);
    }
    public function showEducatorDetails()
    {
        Log::info('AdminController.listEducatorForm: ');
        $educatorInterestForms =  EducatorInterestForm::all();
        $this->viewData['educatorInterestForms'] = $educatorInterestForms;

        return view('admin.educator_form_show', $this->viewData);
    }

}
