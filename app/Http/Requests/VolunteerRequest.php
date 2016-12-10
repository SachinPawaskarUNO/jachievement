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
            'first_name' => 'required|max:100|regex:/^[a-z ,.\'-]+$/i',
            'last_name' => 'required|max:100|regex:/^[a-z ,.\'-]+$/i',
            'company_name' => 'max:100',
            'company_address' => 'max:100',
            'company_city' => 'max:100|alpha',
            'company_zip' => 'regex:/^\d{5}(?:[-\s]\d{4})?$/',
            'company_phone' => 'regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'home_phone' => 'required|regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'home_address' => 'required|max:100',
            'home_city' => 'required|max:100|alpha',
            'home_state_id' => 'required',
            'home_zip' => 'required|regex:/^\d{5}(?:[-\s]\d{4})?$/',
            'email' => 'required|max:100|email'
        ];

        return $rules;
    }
}