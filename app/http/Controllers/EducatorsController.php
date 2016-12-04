<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\EducatorRequest;
use Log;
use App\EducatorInterestForm;
use App\State;
use Session;
use Auth;
use Mail;

class EducatorsController extends Controller
{
    public function index()
    {

        Log::info('EducatorsController: ');
        $this->viewData['heading'] = "Bring Junior Acheivement to Your Classroom!";
        return view('educators.introduction', $this->viewData);
    }

    public function interestform()
    {

        Log::info('EducatorsController.form: ');

        $defaultSelection = [''=>'Please Select'];

        $states = State::lists('name', 'id')->toArray();
        $states =  $defaultSelection + $states;

        return view('educators.interestform', compact('states'));
    }

    public function store(EducatorRequest $request)
    {
        Log::info('EducatorsController.store - Start: ');
        $input = $request->all();
        $user = Auth::user();

        if ($user) {
            $input['user_id'] = $user->id;
        }
        $this->populateCreateFields($input);


        $object = EducatorInterestForm::create($input);

        //Session::flash('flash_message', 'Thank you for registering as  an Educator! We will contact you soon');
        Log::info('EducatorController.store - End: ' . $object->id);

        $receipt= $request->email;
        $data = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'school_name' => $request->school_name,
            'school_phone' => $request->school_phone,
            'school_address' => $request->school_address,
            'school_city' => $request->school_city,
            'school_state' => $request->school_state,
            'school_zip' => $request->school_zip,
            'email' => $request->email,
            'grade' => $request->grade,
            'program_theme' => $request->program_theme,
            'planning_time' => $request->planning_time,
            'cell_phone' => $request->cell_phone,
            'comments_requests' => $request->comments_requests,
            'no_of_classes' => $request->no_of_classes,
            'no_of_students_per_class' => $request->no_of_students_per_class,
        );
        Mail::send('educators.email',$data, function($message)use($receipt,$request)
        {
            $message->from('juniorachievement.midlands@gmail.com', 'Junior Achievement of Midlands');
            //$message->bcc($request->email, $request->first_name);
            $message->to($receipt)->subject('Educator request form submitted successfully');
            $message->cc('juniorachievement.midlands@gmail.com');
        });

        return view('educators.thankyou');
    }


    public function getInvolved()
    {

        Log::info('EducatorsController: ');
        $this->viewData['heading'] = "Bring Junior Acheivement to Your Classroom!";
        return view('get_Involved.getinvolved', $this->viewData);

    }


}
