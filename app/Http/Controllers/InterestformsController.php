<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\VolunteerRequest;
use Log;
use App\VolunteerInterestForm;
use Session;
use Auth;
use DB;

class InterestformsController extends Controller
{
    public function interestform()
    {

        Log::info('InterestformsController.form: ');
       // $this->viewData['heading'] = "Volunteer Interest Form";

        $gradeProgramList = DB::table('programs')
                            ->select(DB::raw('programs.id as program_id, programs.name as program_name,
                             grades.id as grade_id, grades.name as grade_name, grades.description as grade_description'))
                            ->join('grades','programs.grade_id','=', 'grades.id')
                            ->get();

        $grade1= DB::table('programs')
                    ->select(DB::raw('programs.id as program_id, programs.name as program_name,
                             grades.id as grade_id, grades.name as grade_name, grades.description as grade_description'))
                    ->join('grades','programs.grade_id','=', 'grades.id')
                     ->where('grade_id','=','1')
                    ->get();
        $grade2= DB::table('programs')
            ->select(DB::raw('programs.id as program_id, programs.name as program_name,
                             grades.id as grade_id, grades.name as grade_name, grades.description as grade_description'))
            ->join('grades','programs.grade_id','=', 'grades.id')
            ->where('grade_id','=','2')
            ->get();
        $grade3= DB::table('programs')
            ->select(DB::raw('programs.id as program_id, programs.name as program_name,
                             grades.id as grade_id, grades.name as grade_name, grades.description as grade_description'))
            ->join('grades','programs.grade_id','=', 'grades.id')
            ->where('grade_id','=','3')
            ->get();

        return view('volunteers.interestform', compact('grade1','grade2','grade3'));
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

        //$gradeProgramChoice = new GradeProgramChoice();
        //$lastInsertedForm = VolunteerInterestForm::all()->last();
        //$gradeProgramChoice->interest_form_id = $lastInsertedForm->id;
        //$gradeProgramChoice->save();

        Session::flash('flash_message', 'Thank you for registering as Volunteer! We will contact you soon');
        Log::info('InterestformsController.store - End: '.$object->id);
        return redirect()->back();

    }
}
