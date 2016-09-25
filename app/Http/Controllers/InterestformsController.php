<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\VolunteerRequest;
use Log;
use App\VolunteerInterestForm;
use Session;
use Auth;

class InterestformsController extends Controller
{
    public function interestform()
    {

        Log::info('InterestformsController.form: ');
        $this->viewData['heading'] = "Volunteer Interest Form";
        return view('volunteers.interestform', $this->viewData);
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

        Session::flash('flash_message', 'Thank you for registering as Volunteer! We will contact you soon');
        Log::info('InterestformsController.store - End: '.$object->id);
        return redirect()->back();

    }
}
