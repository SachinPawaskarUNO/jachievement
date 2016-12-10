<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CampaignRequest extends Request
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
            'name' => 'required|max:100',
            'description' => 'required',
            'image' => 'required',
            'email' => 'required|max:50|email',
            'phone' => 'required|regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/|max:10',
            'event_date' => 'required|date',
            'venue' => 'required'
        ];
        return $rules;
    }
}
