<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\EducatorInterestForm;
use App\VolunteerInterestForm;
use Log;
use Excel;
use DB;
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
        //$volunteerInterestForm =   VolunteerInterestForm::where('id', '=', $id)->firstOrFail();
        $volunteerInterestForm= DB::table('volunteer_interest_forms')
            ->select('volunteer_interest_forms.*')
            ->join('volunteer_programs', 'volunteer_interest_forms.id', '=', 'volunteer_programs.volunteerform_id')
            ->join('programs', 'programs.id','=','volunteer_programs.program_id')
            ->where('volunteer_interest_forms.id', '=' ,$id)
            ->firstOrFail();


        $home_state_id =  $volunteerInterestForm->home_state_id;
        return $home_state_id;
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
        // $volunteerInterestForms =  VolunteerInterestForm::all();

        $volunteerInterestForms =  DB::table('volunteer_interest_forms')
            ->select('volunteer_interest_forms.school_preference','volunteer_interest_forms.first_name',
                'volunteer_interest_forms.last_name','volunteer_interest_forms.company_name',
                'volunteer_interest_forms.company_address','volunteer_interest_forms.company_city',
                'states1.name as company_state','volunteer_interest_forms.company_zip','volunteer_interest_forms.company_phone',
                'volunteer_interest_forms.home_phone','volunteer_interest_forms.home_address','volunteer_interest_forms.home_city',
                'states2.name as home_state','volunteer_interest_forms.home_zip','volunteer_interest_forms.email',
                'volunteer_interest_forms.created_at','volunteer_interest_forms.mode_of_contact')
            ->join('states as states1', 'states1.id','=','volunteer_interest_forms.company_state_id')
            ->join('states as states2', 'states2.id', '=', 'volunteer_interest_forms.home_state_id')
            ->get();
        return $volunteerInterestForms;


       /* foreach($volunteerInterestForms as $volunteerInterestForm) {
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

       }*/
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
