<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\EducatorRequest;
use Log;
use App\EducatorInterestForm;
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
        $this->viewData['heading'] = "Educator Interest Form";
        return view('educators.interestform', $this->viewData);
    }

    public function store(EducatorRequest $request) {
        Log::info('EducatorsController.store - Start: ');
        $input = $request->all();
        $user = Auth::user();

        if($user) {
            $input['user_id'] = $user;
        }
        $this->populateCreateFields($input);


        $object = EducatorInterestForm::create($input);

        Session::flash('flash_message', 'Thank you for registering as Educator! We will contact you soon');
        Log::info('EducatorController.store - End: '.$object->id);
        return redirect()->back();


    public function getInvolved()
    {

        Log::info('EducatorsController: ');
        $this->viewData['heading'] = "Bring Junior Acheivement to Your Classroom!";
        return view('get_Involved.getinvolved', $this->viewData);

    }
}
