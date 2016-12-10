<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Auth;
use Log;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

//    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function populateCreateFields(&$input)
    {
        if (Auth::check() && $input != null) {
            $input['created_by'] = Auth::user()->id;
            $input['updated_by'] = Auth::user()->id;
        }
    }

    public function populateUpdateFields(&$input)
    {
        if (Auth::check() && $input != null) {
            $input['updated_by'] = Auth::user()->id;
        }
    }

    public function populateCreateFieldsWithUserID(&$input)
    {
        $this->populateCreateFields($input);
        if (Auth::check() && $input != null) {
            $input['user_id'] = Auth::user()->id;
        }
    }

    public function getArrayCreateFields()
    {
        $input = [];
        if (Auth::check() && $input != null) {
            $input['created_by'] = Auth::user()->id;
            $input['updated_by'] = Auth::user()->id;
        }
        return $input;
    }

    public function getLoginUser()
    {
        if (Auth::check()) {
            return Auth::user();
        } else {
            return null;
        }
    }

    public function getLoginUserId()
    {
        if (Auth::check()) {
            return Auth::user()->id;
        } else {
            return 1; // by default return Administrator user id.
        }
    }

    public function getLoginUserEmail()
    {
        if (Auth::check()) {
            return Auth::user()->email;
        } else {
            return null; // by default return Administrator user id.
        }
    }

    public function getLoginUserFirst()
    {
        if (Auth::check()) {
            return Auth::user()->first_name;
        } else {
            return null; // by default return Administrator user id.
        }
    }

    public function getLoginUserLast()
    {
        if (Auth::check()) {
            return Auth::user()->last_name;
        } else {
            return null; // by default return Administrator user id.
        }
    }


}
