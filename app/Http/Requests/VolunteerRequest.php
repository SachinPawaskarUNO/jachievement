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
            'schoolName' => 'max:255',
            'schoolAddress' => 'max:255',
            'schoolCity' => 'max:255',
            'schoolState' => 'max:255',
            'schoolZip' => 'max:255',
            'grade' => 'max:255',
            'homeZip' => 'max:255',
            'email' => 'required|max:255|email',
            'grade' => 'max:255',
            'homeZip' => 'max:255',
//
        ];

        return $rules;
    }
}
