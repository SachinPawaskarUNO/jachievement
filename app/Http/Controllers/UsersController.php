<?php

/**
 * Users Controller
 *
 * @category   Users
 * @package    Basic-Controllers
 * @author     Sachin Pawaskar<spawaskar@unomaha.edu>
 * @copyright  2016-2017
 * @license    The MIT License (MIT)
 * @version    GIT: $Id$
 * @since      File available since Release 1.0.0
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use App\Role;
use Auth;
use Session;
use Input;
use DB;
use Log;

class UsersController extends Controller
{
    public function __construct()
    {
//        $this->middleware('administrator', ['only' => ['create', 'edit', 'destroy', 'update']]);
//        $this->middleware('administrator');
//        $this->middleware('role:admin|root');
        $this->middleware('role:admin');

        $this->user = Auth::user();
        $this->users = User::all();
        $this->list_role = Role::lists('display_name', 'id');
        $this->heading = "Users";

        $this->viewData = [ 'user' => $this->user, 'users' => $this->users, 'list_role' => $this->list_role, 'heading' => $this->heading ];
    }

    public function index()
    {
        Log::info('UsersController.index: ');
        $users = User::all();
        $this->viewData['users'] = $users;

        return view('users.index', $this->viewData);
    }

    public function show(User $users)
    {
        $object = $users;
        Log::info('UsersController.show: '.$object->id.'|'.$object->name);
        $this->viewData['user'] = $object;
        $this->viewData['heading'] = "View User: ".$object->name;

        return view('users.show', $this->viewData);
    }

    public function create()
    {
        Log::info('UsersController.create: ');
        $this->viewData['heading'] = "New User";

        return view('users.create', $this->viewData);
    }

    public function store(UserRequest $request)
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

    public function edit(User $users)
    {
        $object = $users;
        Log::info('UsersController.edit: '.$object->id.'|'.$object->name);
        $this->viewData['user'] = $object;
        $this->viewData['heading'] = "Edit User: ".$object->name;

        return view('users.edit', $this->viewData);
    }

    public function update(User $users, UserRequest $request)
    {
        $object = $users;
        Log::info('UsersController.update - Start: '.$object->id.'|'.$object->name);
//        $this->authorize($object);
        $this->populateUpdateFields($request);
        $request['active'] = $request['active'] == '' ? false : true;

        $object->update($request->all());
        $this->syncRoles($object, $request->input('rolelist'));
        Session::flash('flash_message', 'User successfully updated!');
        Log::info('UsersController.update - End: '.$object->id.'|'.$object->name);
        return redirect('users');
    }

    /**
     * Destroy the given user.
     *
     * @param  Request  $request
     * @param  User  $user
     * @return Response
     */
    public function destroy(Request $request, User $users)
    {
        $object = $users;
        Log::info('UsersController.destroy: Start: '.$object->id.'|'.$object->name);
        if ($this->authorize('destroy', $object))
        {
            Log::info('Authorization successful');
            $object->delete();
        }
        Log::info('UsersController.destroy: End: ');
        return redirect('/users');
    }

    /**
     * Sync up the list of roles for the given user record.
     *
     * @param  User  $user
     * @param  array  $roles (id)
     */
    private function syncRoles(User $user, array $roles)
    {
        Log::info('UsersController.syncRoles: Start: '.$user->name);
        // ToDo: At somepoint need to update the timestamps and created_by/updated_by fields on the pivot table
        $user->roles()->sync($roles);
//        $user->roles()->sync([$roles => ['created_by' => Auth::user()->name, 'updated_by' => Auth::user()->name]]);
    }

}
