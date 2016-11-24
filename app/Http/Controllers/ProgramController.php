<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\VolunteerRequest;
use App\Http\Requests\ProgramRequest;

use Log;
use App\VolunteerInterestForm;

use Session;
use DB;
use Auth;

class ProgramController extends Controller
{
    public function __construct()
    {
            $this->middleware('role:admin|superadmin');
            $this->user = Auth::user();
            $this->programs = Program::all();
            $this->heading = "Programs";
            $this->viewData = [ 'user' => $this->user, 'programs' => $this->programs, 'heading' => $this->heading ];
    }
    
    public function index()
    {
            $this->middleware('role:admin|superadmin');
            Log::info('ProgramController.index: Start -');
            $programs = Program::all();
            $this->viewData['programs'] = $programs;
    
            return view('programs.index', $this->viewData);
    }
    
    public function create()
    {
            $this->middleware('role:admin|superadmin');
            Log::info('ProgramController.create: ');
            $this->viewData['heading'] = "New Program";

            return view('programs.create', $this->viewData);
    }

    public function edit(Program $programs)
    {
            $this->middleware('role:admin|superadmin');
            $object = $programs;
            Log::info('ProgramController.edit: '.$object->id.'|'.$object->name);
            $this->viewData['program'] = $object;
            $this->viewData['heading'] = "Edit Program: ".$object->name;

            return view('programs.edit', $this->viewData);
    }

    public function update(Program $programs, ProgramRequest $request)
    {
            $this->middleware('role:admin|superadmin');
            $object = $programs;
            Log::info('ProgramController.update - Start: '.$object->id.'|'.$object->name);
            $this->populateUpdateFields($request);
            $object->update($request->all());
            Session::flash('flash_message', 'Program successfully updated!');
            Log::info('ProgramController.update - End: '.$object->id.'|'.$object->name);

            return redirect('/programs');
    }

    public function store(ProgramRequest $request)
    {
            $this->middleware('role:admin|superadmin');
            Log::info('ProgramController.store - Start: ');
            $input = $request->all();
            $this->populateCreateFields($input);
            $object = Program::create($input);
            Session::flash('flash_message', 'Program successfully added!');
            Log::info('ProgramController.store - End: '.$object->id.'|'.$object->name);

            return redirect('/programs');
    }

    public function destroy(Request $request, Program $programs)
    {
            $this->middleware('role:admin|superadmin');
            $object = $programs;
            Log::info('ProgramController.destroy: Start: '.$object->id.'|'.$object->name);
            if ($this->authorize('destroy', $object))
            {
                Log::info('Authorization successful');
                $object->delete();
                Session::flash('flash_message', 'Program successfully deleted!');

            }
            Log::info('ProgramController.destroy: End: ');

            return redirect('/programs');
    }
    
}

