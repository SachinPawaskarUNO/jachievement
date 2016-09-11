<?php

/**
 * User Request
 *
 * @category   User
 * @package    Basic-Requests
 * @author     Sachin Pawaskar<spawaskar@unomaha.edu>
 * @copyright  2016-2017
 * @license    The MIT License (MIT)
 * @version    GIT: $Id$
 * @since      File available since Release 1.0.0
 */

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
//            'role_id' => 'required',
        ];

        if ($this['_method'] == 'PATCH') {
            $rules['email'] = 'required|email|max:255';
        } else {
            $rules['password'] = 'required|confirmed|min:6';
        }

        return $rules;
    }
}
