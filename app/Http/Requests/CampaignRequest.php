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
            'name' => 'required|max:100|regex:/^[a-z ,.\'-]+$/i',
            'description' => 'required',
            'image' => 'required',
            'email' => 'required|max:50|email',
            'phone' => 'required|regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'event_date' => 'required|date',
            'venue' => 'required'
        ];
        return $rules;
    }
}
