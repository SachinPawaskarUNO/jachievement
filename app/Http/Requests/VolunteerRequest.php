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
            'firstName' => 'required|max:100|regex:/^[a-z ,.\'-]+$/i',
            'lastName' => 'required|max:100|regex:/^[a-z ,.\'-]+$/i',
            'schoolName' => 'max:100',
            'schoolAddress' => 'max:100',
            'schoolCity' => 'max:100|alpha',
            'schoolState' => 'max:100|alpha',
            'schoolZip' => 'numeric',
            'companyPhone' => 'numeric',
            'homePhone' => 'required|regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'homeZip' => 'numeric',
            'email' => 'required|max:100|email'

//
        ];

        return $rules;
    }
}
