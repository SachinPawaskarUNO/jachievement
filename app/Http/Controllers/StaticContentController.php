<?php

namespace App\Http\Controllers;

use Log;
use Session;
use Auth;
use DB;

use App\StaticContent;
use App\State;
use App\Http\Requests;
use Illuminate\Http\Request;



class StaticContentController extends Controller
{
	public function __construct()
    {
        $this->middleware('role:admin|superadmin');

        $this->user = Auth::user();

        $this->list_states = State::lists('name', 'id')->prepend('Select a State','')->toArray();
        $this->static = StaticContent::all();
        $this->heading = "Static Content Management";

        $this->viewData = [ 'user' => $this->user, 'states' => $this->list_states, 'heading' => $this->heading, 'static' => $this->static ];
    }

    public function index() {
    	Log::info('StaticContentController.index: Start -');
        
        $static= DB::table('static_contents')
            ->select(DB::raw('id, page, item, type, content, default_content, created_by, updated_by'))
            ->orderBy('page', 'DESC')
            ->orderBy('item', 'DESC')
            ->get();
            
        //$static = StaticContent::all();
        $this->viewData['static'] = $static;

        return view('static.index', $this->viewData);
    }


    public function edit(StaticContent $contents)
    {
        $object = $contents;
        Log::info('StaticContentController.editS: '.$object->id);
        $this->viewData['content'] = $object;
        $this->viewData['heading'] = "Edit Static Content" . $object->id;

        return view('static.edit', $this->viewData);
    }

    public function update(StaticContent $contents, StaticContentRequest $request)
    {
        $object = $contents;
        Log::info('StaticContentController.update - Start: '.$object->id);
        $this->populateUpdateFields($request);
        $request['active'] = $request['active'] == '' ? false : true;


        $object->update($request->all());
        Session::flash('flash_message', 'Static Content successfully updated!');
        Log::info('StaticContentController.update - End: '.$object->id);
        return redirect('/static');
    }


}

