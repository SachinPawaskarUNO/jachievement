<?php

/**
 * Comment Request
 *
 * @category   Comment
 * @package    Basic-Requests
 * @author     Sachin Pawaskar<spawaskar@unomaha.edu>
 * @copyright  2016-2017
 * @license    The MIT License (MIT)
 * @version    GIT: $Id$
 * @since      File available since Release 1.0.0
 */

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DonorRequest extends Request
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
            'address' => 'max:100',
            'city' => 'max:100|alpha',
            'state' => 'max:100|alpha',
            'zip' => 'required|regex:/^\d{5}(?:[-\s]\d{4})?$/',
            'phone' => 'required|regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'email' => 'required|max:100|email'
        ];

        return $rules;
    }
}
