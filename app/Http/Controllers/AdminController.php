<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\EducatorInterestForm;
use App\VolunteerInterestForm;
use Log;
use Excel;
use App\State;

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
    public function showEducatorDetails($id)
    {
        Log::info('AdminController.showEducatorDetails: ');
        $educatorInterestForm =   EducatorInterestForm::where('id', '=', $id)->firstOrFail();
        $school_state_id =  $educatorInterestForm->school_state_id;
        if($school_state_id != null) {
            $state = State::where('id', "=" , $school_state_id)->firstOrFail();
            $educatorInterestForm->school_state = $state->name;
        }


        return view('admin.educator_form_show', compact('educatorInterestForm'));
    }

    public function showVolunteerDetails($id)
    {
        Log::info('AdminController.showVolunteerDetails: ');
        $volunteerInterestForm =   VolunteerInterestForm::where('id', '=', $id)->firstOrFail();

        $home_state_id =  $volunteerInterestForm->home_state_id;
        $company_state_id =  $volunteerInterestForm->home_state_id;
        if($home_state_id != null) {
            $state1 = State::where('id', "=" , $home_state_id)->firstOrFail();
            $volunteerInterestForm->home_state = $state1->name;
        }

        if($company_state_id != null) {
            $state2 = State::where('id', "=" , $company_state_id)->firstOrFail();
            $volunteerInterestForm->company_state = $state2->name;
        }

        return view('admin.volunteer_form_show', compact('volunteerInterestForm'));
    }

    public function destroyEducatorForm($id)
    {
        Log::info('AdminController.destroyEducatorForm: ');
        return view('admin.educator_form_show', compact('educatorInterestForm'));
    }

    public function destroyVolunteerForm($id)
    {
        Log::info('AdminController.destroyEducatorForm: ');
        return view('admin.educator_form_show', compact('educatorInterestForm'));
    }

    public function downloadVolunteerReport()
    {

       Log::info('AdminController.downloadVolunteerReport: ');
       $volunteerInterestForms =  VolunteerInterestForm::all();

       foreach($volunteerInterestForms as $volunteerInterestForm) {
           $home_state_id =  $volunteerInterestForm->home_state_id;
           $company_state_id =  $volunteerInterestForm->home_state_id;
           if($home_state_id != null) {
               $state1 = State::where('id', "=" , $home_state_id)->firstOrFail();
               $volunteerInterestForm->home_state = $state1->name;
           }

           if($company_state_id != null) {
               $state2 = State::where('id', "=" , $company_state_id)->firstOrFail();
               $volunteerInterestForm->company_state = $state2->name;
           }

       }
       Excel::create('report', function($excel) use($volunteerInterestForms) {
            $excel->sheet('Sheet 1', function($sheet) use($volunteerInterestForms) {
                $sheet->fromArray($volunteerInterestForms);
            });
        })->export('xls');
    }

    public function downloadEducatorReport()
    {
        Log::info('AdminController.downloadEducatorReport: ');
        $educatorInterestForms =  EducatorInterestForm::all();

        foreach($educatorInterestForms as $educatorInterestForm) {
            $school_state_id =  $educatorInterestForm->school_state_id;
            if($school_state_id != null) {
                $state = State::where('id', "=" , $school_state_id)->firstOrFail();
                $educatorInterestForm->school_state = $state->name;
            }
        }
        Excel::create('report', function($excel) use($educatorInterestForms) {
            $excel->sheet('Sheet 1', function($sheet) use($educatorInterestForms) {
                $sheet->fromArray($educatorInterestForms);
            });
        })->export('xls');

    }
}
