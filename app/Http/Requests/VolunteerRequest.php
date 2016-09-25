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
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'companyName' => 'max:255',
            'companyAddress' => 'max:255',
            'companyCity' => 'max:255',
            'homeAddress' => 'max:255',
            'homeCity' => 'max:255',
            'homeZip' => 'max:255',
            'email' => 'required|max:255|email',
            'schoolPreference' => 'max:255',
//
        ];

        return $rules;
    }
}
