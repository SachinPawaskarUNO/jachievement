<?php

namespace App\Http\Controllers;

use App\School;
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
use Mail;
class InterestformsController extends Controller
{
    public function interestform()
    {

        Log::info('InterestformsController.form: ');

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
        $schools = School::lists('school_name','id')->toArray();
        $states =  $defaultSelection + $states;
        $schools = $defaultSelection + $schools;
        return view('volunteers.interestform', compact('grade_program1', 'grade_program2', 'grade_program3', 'mode_of_contact', 'states', 'schools'));
    }

    public function store(VolunteerRequest $request) {
        Log::info('InterestformsController.store - Start: ');
        $input = $request->all();
        if ($input['company_state_id'] == '') {
            $input['company_state_id'] = null;
        }
        if ($input['school_preference_id'] == '') {
            $input['school_preference_id'] = null;
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

        $receipt= $request->email;
        $data = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'school_preference_id' => $request->school_preference_id,
            'company_name' => $request->company_name,
            'company_address' => $request->company_address,
            'company_city' => $request->company_city,
            'company_state_id' => $request->company_state_id,
            'company_zip' => $request->company_zip,
            'work_phone' => $request->work_phone,
            'home_phone' => $request->home_phone,
            'home_address' => $request->home_address,
            'home_city' => $request->home_city,
            'home_state_id' => $request->home_state_id,
            'home_zip' => $request->home_zip,
            'email' => $request->email,
            'mode_of_contact' => $request->mode_of_contact,
        );
        Mail::send('volunteers.email',$data, function($message)use($receipt,$request)
        {
            $message->from('juniorachievement.midlands@gmail.com', 'Junior Achievement of Midlands');
            $message->cc('juniorachievement.midlands@gmail.com');
            $message->to($receipt)->subject('Volunteer request form submitted successfully');
        });

        //Session::flash('flash_message', 'Thank you for registering as a Volunteer! We will contact you soon');
       // Log::info('InterestformsController.store - End: '.$object->id);
        return view('volunteers.thankyou');

    }

    public function index() {
        $staticcontents= DB::table('static_contents')
          ->select(DB::raw('item, content'))
          ->where('page','=','Volunteers')
          ->get();
        $contents = array();

        foreach($staticcontents as $static) {
            $contents[$static->item] = $static->content;
        }


        Log::info('InterestformsController');
        $this->viewData['heading'] = "Volunteer Introduction Page";
        $this->viewData['contents'] = $contents;
        return view('volunteers.introduction', $this->viewData);
    }
}
