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


class MapController extends Controller
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

    public function map()
    {
        Log::info('MapController.form: ');
        $this->viewData['heading'] = "Map";
        return view('aboutus.map', $this->viewData);
    }

    public function index() {
    	Log::info('MapController.manageSchools: Start -');

    	$schools = School::all();
        $this->viewData['schools'] = $schools;

        return view('schools.index', $this->viewData);
    }

    public function create()
    {
        Log::info('MapController.createSchool: ');
        $this->viewData['heading'] = "New School";

        return view('schools.create', $this->viewData);
    }

    public function edit(School $schools)
    {
        $object = $schools;
        Log::info('MapController.editSchool: '.$object->id.'|'.$object->school_name);
        $this->viewData['school'] = $object;
        $this->viewData['heading'] = "Edit School: ".$object->school_name;

        return view('schools.edit', $this->viewData);
    }

    public function update(School $schools, SchoolRequest $request)
    {
        $object = $schools;
        Log::info('MapController.updateSchool - Start: '.$object->id.'|'.$object->school_name);
        $this->populateUpdateFields($request);
        $request['active'] = $request['active'] == '' ? false : true;

        $object->update($request->all());
        Session::flash('flash_message', 'School successfully updated!');
        Log::info('MapController.updateSchool - End: '.$object->id.'|'.$object->school_name);
        return redirect('schools');
    }
}

