<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
        $rules =  [
            'name' => ['required' , 'string' , 'max:255'],
            'lastname' => ['required' , 'string' , 'max:255'],
            'phone' => ['required' , 'string', 'unique:users'],
            'email' => ['required' ,'string' , 'unique:users,email'],
            'password' => ['required' , 'min:8' , 'confirmed']
        ];
        return $rules;
    }
}
