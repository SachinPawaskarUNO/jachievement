<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TeamRequest extends Request
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
            'organization_id' => 'required',
            'name' => 'required|max:100',
            'orgName' => 'max:100',
            'title' => 'required|max:100',
            'content' => 'required|max:4000',
            'goal' => 'required|numeric|min:1',
            'campaign_id' => 'required'
            ];

        return $rules;
    }
}
