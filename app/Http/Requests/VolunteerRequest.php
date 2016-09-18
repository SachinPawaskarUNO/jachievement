<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VolunteerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'company' => 'max:255',
            'email' => 'required|email|max:255|',
            'address' => 'max:255',
            'city' => 'max:255',
            'state' => 'max:255',
            'zip' => 'number|max:5',
            'work_phone' => 'phone',
            'home_phone' => 'phone',
            'home_address' => 'max:255',
            'home_city' => 'max:255',
            'home_state' => 'max:255',
            'home_zip' => 'max:255',
            'email' => 'required|max:255|email'
//            'role_id' => 'required',
        ];

        return $rules;
    }
}
