<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EducatorRequest extends Request
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
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'school_name' => 'required|max:100',
            'school_phone' => 'required|regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/|max:10',
            'school_address' => 'required|max:100',
            'school_city' => 'required|max:50',
            'school_state_id' => 'required',
            'school_zip' => 'required|regex:/^\d{5}(?:[-\s]\d{4})?$/',
            'email' => 'required|max:50|email',
            'grade' => 'max:50',
            'program_theme' => 'max:50',
            'no_of_classes' => '[a-zA-Z0-9_ ]',
            'no_of_students_per_class' => '[a-zA-Z0-9_ ]',
            'comments_requests' => 'max:255',
            'cell_phone' => 'regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/|max:10'
        ];

        return $rules;
    }
}
