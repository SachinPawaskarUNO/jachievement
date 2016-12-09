<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProgramRequest extends Request
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
            'name' => 'required|max:255',
            'image' => 'required',
            'description' => 'required',
            'program_url' => 'required',
            'implementation' => 'required',
            'grade_id' => 'required',
            'financial_readiness' => 'required',
            'work_readiness' => 'required',
            'entrepreneurship' => 'required',
        ];

        return $rules;
    }
}
