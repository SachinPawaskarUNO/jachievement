<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\VolunteerRequest;
use Log;
use App\VolunteerInterestForm;
use App\VolunteerProgram;
use Session;
use Auth;
use DB;

class InterestformsController extends Controller
{
    public function interestform()
    {

        Log::info('InterestformsController.form: ');
       //$this->viewData['heading'] = "Volunteer Interest Form";


        $grade_program1= DB::table('programs')
                    ->select(DB::raw('programs.id as program_id, programs.name as program_name'))
                     ->where('grade_id','=','1')
                    ->get();

        $grade_program2= DB::table('programs')
            ->select(DB::raw('programs.id as program_id, programs.name as program_name'))
                ->where('grade_id','=','2')
                ->get();
        $grade_program3= DB::table('programs')
            ->select(DB::raw('programs.id as program_id, programs.name as program_name'))
                ->where('grade_id','=','3')
                ->get();
        $modeOfContact = array('none' => 'None', 'email' => 'Email', 'phone' => 'Phone');
        return view('volunteers.interestform', compact('grade_program1', 'grade_program2', 'grade_program3', 'modeOfContact'));
    }

    public function store(VolunteerRequest $request) {
        Log::info('InterestformsController.store - Start: ');
        $input = $request->all();

        $user = Auth::user();

        if($user) {
            $input['user_id'] = $user;
        }
        $this->populateCreateFields($input);

        $object = VolunteerInterestForm::create($input);

        $grade_programs1= DB::table('programs')
            ->select(DB::raw('programs.id as program_id, programs.name as program_name'))
            ->where('grade_id','=','1')
            ->get();


        foreach($grade_programs1 as $program1) {
            $volunteerProgram = new VolunteerProgram();
            $lastInsertedForm = VolunteerInterestForm::all()->last();
            $volunteerProgram->volunteerform_id = $lastInsertedForm->id;
            $choice = "program_choice_" .$program1->program_id;
            $volunteerProgram->program_id = $request->$choice * 1;
            if(($volunteerProgram->program_id)!=0) {
                $volunteerProgram->save();
            }
        }


        $grade_programs2= DB::table('programs')
            ->select(DB::raw('programs.id as program_id, programs.name as program_name'))
            ->where('grade_id','=','2')
            ->get();

        foreach($grade_programs2 as $program2) {
            $volunteerProgram = new VolunteerProgram();
            $lastInsertedForm = VolunteerInterestForm::all()->last();
            $volunteerProgram->volunteerform_id = $lastInsertedForm->id;
            $choice = "program_choice_" .$program2->program_id;
            $volunteerProgram->program_id = $request->$choice * 1;
            if(($volunteerProgram->program_id)!=0) {
                $volunteerProgram->save();
            }
        }

        $grade_programs3= DB::table('programs')
            ->select(DB::raw('programs.id as program_id, programs.name as program_name'))
            ->where('grade_id','=','3')
            ->get();

        foreach($grade_programs3 as $program3) {
            $volunteerProgram = new VolunteerProgram();
            $lastInsertedForm = VolunteerInterestForm::all()->last();
            $volunteerProgram->volunteerform_id = $lastInsertedForm->id;
            $choice = "program_choice_" .$program3->program_id;
            $volunteerProgram->program_id = $request->$choice * 1;
            if(($volunteerProgram->program_id)!=0) {
                $volunteerProgram->save();
            }
        }

        Session::flash('flash_message', 'Thank you for registering as Volunteer! We will contact you soon');
        Log::info('InterestformsController.store - End: '.$object->id);
        return redirect()->back();

    }

    public function index() {
        Log::info('InterestformsController');
        $this->viewData['heading'] = "Volunteer Introduction Page";
        return view('volunteers.introduction', $this->viewData);
    }
}
