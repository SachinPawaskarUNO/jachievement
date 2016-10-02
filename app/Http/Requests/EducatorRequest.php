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
            'firstName' => 'required|alpha|max:100',
            'lastName' => 'required|max:100',
            'schoolName' => 'required|max:100',
            'schoolAddress' => 'required|max:100',
            'schoolCity' => 'required|max:50',
            'schoolState' => 'required|max:50',
            'schoolZip' => 'required|numeric',
            'grade' => 'alpha_dash',
            'homeZip' => 'numeric',
            'email' => 'required|max:50|email',
            'programTheme' => 'max:50',
            'noOfClasses' => 'alpha_num',
            'noOfStudentsPerClass' => 'numeric',
            'commentsRequests' => 'max:255',

        ];

        return $rules;
    }
}
