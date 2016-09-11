<?php

/**
 * Controller Class derived from BaseController
 *
 * @category   Controller
 * @package    Basic-Controllers
 * @author     Sachin Pawaskar<spawaskar@unomaha.edu>
 * @copyright  2016-2017
 * @license    The MIT License (MIT)
 * @version    GIT: $Id$
 * @since      File available since Release 1.0.0
 */

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
        if (Auth::check() && $input != null)
        {
            $input['created_by'] = Auth::user()->name;
            $input['updated_by'] = Auth::user()->name;
        }
    }

    public function populateUpdateFields(&$input)
    {
        if (Auth::check() && $input != null)
        {
            $input['updated_by'] = Auth::user()->name;
        }
    }

    public function populateCreateFieldsWithUserID(&$input)
    {
        $this->populateCreateFields($input);
        if (Auth::check() && $input != null)
        {
            $input['user_id'] = Auth::user()->id;
        }
    }

    public function getArrayCreateFields()
    {
        $input = [];
        if (Auth::check() && $input != null)
        {
            $input['created_by'] = Auth::user()->name;
            $input['updated_by'] = Auth::user()->name;
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


}
