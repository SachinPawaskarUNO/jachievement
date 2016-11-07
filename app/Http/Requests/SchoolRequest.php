<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SchoolRequest extends Request
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
            'school_name' => 'required|max:255',
            'school_address' => 'max:255',
            'school_city' => 'max:255',
            'school_state_id' => 'numeric',
            'school_zip' => 'regex:/^\d{5}(?:[-\s]\d{4})?$/',
            'school_phone' => 'regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'school_latitude' => 'max:255',
            'school_longitude' => 'max:255'
            ];

        return $rules;
    }
}
