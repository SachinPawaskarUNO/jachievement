<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DonationRequest extends Request
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
            'address' => 'max:100',
            'city' => 'max:100|alpha',
            'zip' => 'required|regex:/^\d{5}(?:[-\s]\d{4})?$/',
            'phone' => 'regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'email' => 'required|max:100|email',
            'amount_actual' => 'regex:/^[+]?\d+([.]\d+)?$/',
        ];

        return $rules;
    }
    public function messages() {
        return [
            'amount_actual.regex' => 'The amount must be a positive number',
            'phone.regex' => 'Phone number must be in the
                following formats: XXX-XXX-XXXX, XXX XXX XXXX or XXXXXXXXXX'
        ];
    }
}
