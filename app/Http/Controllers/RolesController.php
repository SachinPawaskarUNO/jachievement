<?php

/**
 * Roles Controller
 *
 * @category   Roles
 * @package    Basic-Controllers
 * @author     Sachin Pawaskar<spawaskar@unomaha.edu>
 * @copyright  2016-2017
 * @license    The MIT License (MIT)
 * @version    GIT: $Id$
 * @since      File available since Release 1.0.0
 */

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;

use App\Http\Requests;
use Auth;
use Session;
use Log;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');

        $this->user = Auth::user();
        $this->list_permission = Permission::lists('display_name', 'id');
        $this->heading = "Roles";

        $this->viewData = [ 'user' => $this->user, 'list_permission' => $this->list_permission, 'heading' => $this->heading ];
    }

    public function index()
    {
        Log::info('RolesController.index: ');
        $roles = Role::all();
        $this->viewData['roles'] = $roles;

        return view('roles.index', $this->viewData);
    }

    public function show(Role $roles)
    {
        $object = $roles;
        Log::info('RolesController.show: '.$object->id.'|'.$object->name);
        $this->viewData['role'] = $object;
        $this->viewData['heading'] = "View Role: ".$object->display_name;

        return view('roles.show', $this->viewData);
    }

    public function create()
    {
        Log::info('RolesController.create: ');
        $this->viewData['heading'] = "New Role";

        return view('roles.create', $this->viewData);
    }

    public function store(RoleRequest $request)
    {
        Log::info('RolesController.store - Start: ');
        $input = $request->all();
        $this->populateCreateFields($input);

        $object = Role::create($input);
        $this->syncPermissions($object, $request->input('permissionlist'));
        Session::flash('flash_message', 'Role successfully added!');
        Log::info('RolesController.store - End: '.$object->id.'|'.$object->name);

        return redirect()->back();
    }

    public function edit(Role $roles)
    {
        $object = $roles;
        Log::info('RolesController.edit: '.$object->id.'|'.$object->name);
        $this->viewData['role'] = $object;
        $this->viewData['heading'] = "Edit Role: ".$object->display_name;

        return view('roles.edit', $this->viewData);
    }

    public function update(Role $roles, RoleRequest $request)
    {
        $object = $roles;
        Log::info('RolesController.update - Start: '.$object->id.'|'.$object->name);
        $this->populateUpdateFields($request);

        $object->update($request->all());
        $this->syncPermissions($object, $request->input('permissionlist'));
        Session::flash('flash_message', 'Role successfully updated!');
        Log::info('RolesController.update - End: '.$object->id.'|'.$object->name);
        return redirect('roles');
    }

    /**
     * Destroy the given skeletal element.
     *
     * @param  Request  $request
     * @param  Role  $role
     * @return Response
     */
    public function destroy(Request $request, Role $roles)
    {
        $object = $roles;
        Log::info('RolesController.destroy: Start: '.$object->id.'|'.$object->name);
        if ($this->authorize('destroy', $object))
        {
            Log::info('Authorization successful');
            $object->delete();
        }
        Log::info('RolesController.destroy: End: ');
        return redirect('/roles');
    }

    /**
     * Sync up the list of permissions for the given role record.
     *
     * @param  User  $role
     * @param  array  $permissions (id)
     */
    private function syncPermissions(Role $role, array $permissions)
    {
        Log::info('RolesController.syncPermissions: Start: '.$role->name);
        // ToDo: At somepoint need to update the timestamps and created_by/updated_by fields on the pivot table
        $role->perms()->sync($permissions);
//        $user->roles()->sync([$roles => ['created_by' => Auth::user()->name, 'updated_by' => Auth::user()->name]]);
    }
}
