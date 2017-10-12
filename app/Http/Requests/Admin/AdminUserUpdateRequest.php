<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseRequest;

class AdminUserUpdateRequest extends BaseRequest
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
            'password' => 'required| min:6',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Please Fill Admin Email',
            'name.required' => 'Please Fill Admin Name',
            'password.required' => 'Please Fill Admin Password',
            'password.min' => 'Please Fill At least 6 characters for Admin Password',
        ];
    }
}
