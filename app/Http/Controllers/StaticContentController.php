<?php

namespace App\Http\Controllers;

use Log;
use Session;
use Auth;
use DB;

use App\Staticcontent;
use App\Http\Requests\StaticcontentRequest;
use App\Http\Requests;
use Illuminate\Http\Request;



class StaticContentController extends Controller
{
	public function __construct()
    {
        $this->middleware('role:admin|superadmin');

        $this->user = Auth::user();

        $this->static = Staticcontent::all();
        $this->heading = "Static Content Management";

        $this->viewData = [ 'user' => $this->user, 'heading' => $this->heading, 'static' => $this->static ];
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

        return view('staticcontents.index', $this->viewData);
    }


    public function edit(Staticcontent $staticcontents)
    {
        $object = $staticcontents;
        Log::info('StaticContentController.editS: '.$object->id);
        $this->viewData['content'] = $object;
        $this->viewData['heading'] = "Edit Static Content";

        return view('staticcontents.edit', $this->viewData);
    }

    public function update(Staticcontent $staticcontents, StaticcontentRequest $request)
    {
        $object = $staticcontents;
        Log::info('StaticContentController.update - Start: '.$object->id);
        $this->populateUpdateFields($request);
        $reset = $request['resetdefault'] == '' ? false : true;

        $flashMessage = 'Content successfully updated!';
        if ($reset) {
            $flashMessage = 'Content successfully reset to default value';
            $object->content = $object->default_content;
            $object->update();
        } else {
            $object->update($request->all());
        }
        Session::flash('flash_message', $flashMessage);
        Log::info('StaticContentController.update - End: '.$object->id);
        return redirect('/staticcontents');
    }


}

