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
            'schoolPreference' => 'max:100',
            'firstName' => 'required|max:100|regex:/^[a-z ,.\'-]+$/i',
            'lastName' => 'required|max:100|regex:/^[a-z ,.\'-]+$/i',
            'companyName' => 'max:100',
            'companyAddress' => 'max:100',
            'companyCity' => 'max:100|alpha',
            'companyState' => 'max:100|alpha',
            'companyZip' => 'regex:/^\d{5}(?:[-\s]\d{4})?$/',
            'companyPhone' => 'regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'homePhone' => 'required|regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'homeAddress' => 'required|max:100',
            'homeCity' => 'required|max:100|alpha',
            'homeState' => 'required|max:100|alpha',
            'homeZip' => 'required|regex:/^\d{5}(?:[-\s]\d{4})?$/',
            'email' => 'required|max:100|email'
//
        ];

        return $rules;
    }
}