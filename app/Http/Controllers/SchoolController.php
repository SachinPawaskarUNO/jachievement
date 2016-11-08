<?php

namespace App\Http\Controllers;

use Log;
use Session;
use Auth;
use DB;

use App\School;
use App\State;
use App\Http\Requests\SchoolRequest;
use App\Http\Requests;
use Illuminate\Http\Request;



class SchoolController extends Controller
{
	public function __construct()
    {
        $this->middleware('role:admin');

        $this->user = Auth::user();
        $this->schools = School::all();
        $this->list_states = State::lists('name', 'id')->prepend('Select a State','')->toArray();
        $this->heading = "Schools";

        $this->viewData = [ 'user' => $this->user, 'schools' => $this->schools, 'states' => $this->list_states, 'heading' => $this->heading ];
    }

    public function index() {
    	Log::info('SchoolController.index: Start -');

    	$schools = School::all();
        $this->viewData['schools'] = $schools;

        return view('schools.index', $this->viewData);
    }

    public function create()
    {
        Log::info('SchoolController.create: ');
        $this->viewData['heading'] = "New School";

        return view('schools.create', $this->viewData);
    }

    public function edit(School $schools)
    {
        $object = $schools;
        Log::info('SchoolController.editS: '.$object->id.'|'.$object->school_name);
        $this->viewData['school'] = $object;
        $this->viewData['heading'] = "Edit School: ".$object->school_name;

        return view('schools.edit', $this->viewData);
    }

    public function update(School $schools, SchoolRequest $request)
    {
        $object = $schools;
        Log::info('SchoolController.update - Start: '.$object->id.'|'.$object->school_name);
        $this->populateUpdateFields($request);
        $request['active'] = $request['active'] == '' ? false : true;

        /* If school_state_id = '', then set to null to avoid foreign key violation */
        if ($request['school_state_id'] == '') {
        	$request['school_state_id'] = null;
        }

        $object->update($request->all());
        Session::flash('flash_message', 'School successfully updated!');
        Log::info('SchoolController.update - End: '.$object->id.'|'.$object->school_name);
        return redirect('/schools');
    }

    public function store(SchoolRequest $request)
    {
        Log::info('SchoolController.store - Start: ');
        $input = $request->all();
        $this->populateCreateFields($input);
        $input['active'] = $request['active'] == '' ? false : true;

        /* If school_state_id = '', then set to null to avoid foreign key violation */
        if ($request['school_state_id'] == '') {
        	$input['school_state_id'] = null;
        }

        $object = School::create($input);
        Session::flash('flash_message', 'School successfully added!');
        Log::info('SchoolController.store - End: '.$object->id.'|'.$object->school_name);
        return redirect('/schools');
    }

    public function destroy(Request $request, School $schools)
    {
        $object = $schools;
        Log::info('SchoolController.destroy: Start: '.$object->id.'|'.$object->school_name);
        if ($this->authorize('destroy', $object))
        {
            Log::info('Authorization successful');
            $object->delete();
            Session::flash('flash_message', 'School successfully deleted!');

        }
        Log::info('SchoolController.destroy: End: ');
        return redirect('/schools');
    }
}

