<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseRequest;

class UserRequest extends BaseRequest
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
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please Fill User Name',
            'email.required' => 'Please Fill User Email',
            'password.required' => 'Please Fill User Password',
            'password.min' => 'Please Fill At least 6 character for Password'
        ];
    }
}
