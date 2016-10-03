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
            'firstName' => 'required|max:100|regex:/^[a-z ,.\'-]+$/i',
            'lastName' => 'required|max:100|regex:/^[a-z ,.\'-]+$/i',
            'schoolName' => 'required|max:100',
            'schoolPhone' => 'required|regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'schoolAddress' => 'required|max:100',
            'schoolCity' => 'required|max:50',
            'schoolState' => 'required|max:50',
            'schoolZip' => 'required|regex:/^\d{5}(?:[-\s]\d{4})?$/',
            'email' => 'required|max:50|email',
            'grade' => 'alpha_dash',
            'programTheme' => 'max:50|alpha_dash',
            'noOfClasses' => 'alpha_num',
            'noOfStudentsPerClass' => 'alpha_num',
            'commentsRequests' => 'max:255',
            'cellphone' => 'regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/'
        ];

        return $rules;
    }
}
