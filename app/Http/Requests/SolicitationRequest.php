<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SolicitationRequest extends Request
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
            'teamname' => 'required',
            //'email' => 'required|max:50|email',
            //'phone_number' => 'required|regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'message' => 'max:2000'
        ];
       /* foreach($this->request->get('email') as $key => $value)
        {
            $rules['email.'.$key] = 'required';
        }*/

        return $rules;
    }
}
