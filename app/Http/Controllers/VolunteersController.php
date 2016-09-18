<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VolunteersController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VolunteerRequest $request)
    {
        Log::info('UsersController.store - Start: ');
        $input = $request->all();
        $this->populateCreateFields($input);
        $input['password'] = bcrypt($request['password']);
        $input['active'] = $request['active'] == '' ? false : true;

        $object = User::create($input);
        $this->syncRoles($object, $request->input('rolelist'));
        Session::flash('flash_message', 'User successfully added!');
        Log::info('UsersController.store - End: '.$object->id.'|'.$object->name);
        return redirect()->back();
    }
}
