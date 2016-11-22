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

        Session::flash('flash_message', 'Thank you for registering as  an Educator! We will contact you soon');
        Log::info('EducatorController.store - End: ' . $object->id);
        return view('educators.thankyou');
    }


    public function getInvolved()
    {

        Log::info('EducatorsController: ');
        $this->viewData['heading'] = "Bring Junior Acheivement to Your Classroom!";
        return view('get_Involved.getinvolved', $this->viewData);

    }


}
