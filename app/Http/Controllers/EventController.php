<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CampaignRequest;

use Log;


use Session;
use DB;
use Auth;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|superadmin');
        $this->user = Auth::user();
        $this->events = Campaign::all();
        $this->heading = "Events";
        $this->viewData = ['user' => $this->user, 'events' => $this->events, 'heading' => $this->heading];
    }

    public function index()
    {
        $this->middleware('role:admin|superadmin');
        Log::info('EventController.index: Start -');
        $events = Campaign::all();
        $this->viewData['events'] = $events;

        return view('eventmanage.index', $this->viewData);
    }

    public function create()
    {
        $this->middleware('role:admin|superadmin');
        Log::info('EventController.create: ');
        $this->viewData['heading'] = "New Event";

        return view('eventmanage.create', $this->viewData);
    }

    public function edit(Campaign $events)
    {
        $this->middleware('role:admin|superadmin');
        $object = $events;
        Log::info('EventController.edit: ' . $object->id . '|' . $object->name);
        $this->viewData['event'] = $object;
        $this->viewData['heading'] = "Edit Event: " . $object->name;

        return view('eventmanage.edit', $this->viewData);
    }

    public function update(Campaign $events, CampaignRequest $request)
    {
        $this->middleware('role:admin|superadmin');
        $object = $events;
        Log::info('EventController.update - Start: ' . $object->id . '|' . $object->name);
        $this->populateUpdateFields($request);
        $request['active'] = $request['active'] == '' ? false : true;
        $request['create_team'] = $request['create_team'] == '' ? false : true;
        $object->update($request->all());
        Session::flash('flash_message', 'Event was updated successfully!');
        Log::info('EventController.update - End: ' . $object->id . '|' . $object->name);

        return redirect('/events');
    }

    public function store(CampaignRequest $request)
    {
        $this->middleware('role:admin|superadmin');
        Log::info('EventController.store - Start: ');
        $input = $request->all();
        $this->populateCreateFields($input);
        $input['active'] = $request['active'] == '' ? false : true;
        $input['create_team'] = $request['create_team'] == '' ? false : true;
        $object = Campaign::create($input);
        Session::flash('flash_message', 'Event was added successfully!');
        Log::info('EventController.store - End: ' . $object->id . '|' . $object->name);

        return redirect('/events');
    }

    public function destroy(Request $request, Campaign $events)
    {
        $this->middleware('role:admin|superadmin');
        $object = $events;
        Log::info('EventController.destroy: Start: ' . $object->id . '|' . $object->name);
        if ($this->authorize('destroy', $object)) {
            Log::info('Authorization successful');
            $object->delete();
            Session::flash('flash_message', 'Event was deleted successfully!');

        }
        Log::info('EventController.destroy: End: ');

        return redirect('/events');
    }

}

