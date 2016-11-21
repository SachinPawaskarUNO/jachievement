<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\VolunteerRequest;
use Log;
use App\VolunteerInterestForm;
use App\VolunteerProgram;
use App\State;
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
        $mode_of_contact = array('none' => 'None', 'email' => 'Email', 'phone' => 'Phone');

        $defaultSelection = [''=>'Please Select'];

        $states = State::lists('name', 'id')->toArray();
        $states =  $defaultSelection + $states;

        return view('volunteers.interestform', compact('grade_program1', 'grade_program2', 'grade_program3', 'mode_of_contact', 'states'));
    }

    public function store(VolunteerRequest $request) {
        Log::info('InterestformsController.store - Start: ');
        $input = $request->all();
        if ($input['company_state_id'] == '') {
            $input['company_state_id'] = null;
        }
        $user = Auth::user();
        if($user) {
            $input['user_id'] = $user->id;
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

      /*  $data = array(
            'name' => $request->first_name,
            'email' => $request->email
        );

        Mail::send('educators.emails',$data, function($message)use($request)
        {
            $message->from('juniorachievement.midlands@gmail.com');
            $message->bcc($request->email, $request->name);
            $message->to('juniorachievement.midlands@gmail.com', 'Admin')->subject('Information from Educator Interest form');
        });*/

        Session::flash('flash_message', 'Thank you for registering as a Volunteer! We will contact you soon');
       // Log::info('InterestformsController.store - End: '.$object->id);
        return view('volunteers.thankyou');

    }

    public function index() {
        Log::info('InterestformsController');
        $this->viewData['heading'] = "Volunteer Introduction Page";
        return view('volunteers.introduction', $this->viewData);
    }
}
