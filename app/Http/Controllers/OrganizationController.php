<?php

namespace App\Http\Controllers;

use Log;
use Session;
use DB;
use Auth;

use App\Organization;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\OrganizationRequest;



class OrganizationController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|superadmin');
        $this->user = Auth::user();
        $this->organizations = Organization::all();
        $this->heading = "Organizations";
        $this->viewData = [ 'user' => $this->user, 'organizations' => $this->organizations, 'heading' => $this->heading ];
    }

    public function index()
    {
        $this->middleware('role:admin|superadmin');
        Log::info('OrganizationController.index: Start -');
        $organizations = Organization::all();
        $this->viewData['organizations'] = $organizations;

        return view('organizations.index', $this->viewData);
    }

    public function create()
    {
        $this->middleware('role:admin|superadmin');
        Log::info('OrganizationController.create: ');
        $this->viewData['heading'] = "New Organization";

        return view('organizations.create', $this->viewData);
    }

    public function edit(Organization $organizations)
    {
        $this->middleware('role:admin|superadmin');
        $object = $organizations;
        Log::info('OrganizationController.edit: '.$object->id.'|'.$object->name);
        $this->viewData['organization'] = $object;
        $this->viewData['heading'] = "Edit Organization: ".$object->name;

        return view('organizations.edit', $this->viewData);
    }

    public function update(Organization $organizations, OrganizationRequest $request)
    {
        $this->middleware('role:admin|superadmin');
        $object = $organizations;
        Log::info('OrganizationController.update - Start: '.$object->id.'|'.$object->name);
        $this->populateUpdateFields($request);
        $object->update($request->all());
        Session::flash('flash_message', 'Organization was updated successfully!');
        Log::info('OrganizationController.update - End: '.$object->id.'|'.$object->name);

        return redirect('/organizations');
    }

    public function store(OrganizationRequest $request)
    {
        $this->middleware('role:admin|superadmin');
        Log::info('OrganizationController.store - Start: ');

        $input = $request->all();
        $this->populateCreateFields($input);
        $object = Organization::create($input);
        \DB::listen(function($object) {
            var_dump($object);
        });
        Session::flash('flash_message', 'Organization was added successfully!');
        Log::info('OrganizationController.store - End: '.$object->id.'|'.$object->name);

        return redirect('/organizations');
    }

    public function destroy(Request $request, Organization $organizations)
    {
        $this->middleware('role:admin|superadmin');
        $object = $organizations;
        Log::info('OrganizationController.destroy: Start: '.$object->id.'|'.$object->name);
        if ($this->authorize('destroy', $object))
        {
            Log::info('Authorization successful');
            $object->delete();
            Session::flash('flash_message', 'Organization was deleted successfully!');

        }
        Log::info('OrganizationController.destroy: End: ');

        return redirect('/organizations');
    }

}

