<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
            'role' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле должно быть заполнено',
            'name.string' => 'Это поле должно быть строкой',
            'email.required' => 'Это поле должно быть заполнено',
            'email.string' => 'Это поле должно быть строкой',
            'email.email' => 'Напишите почту',
            'email.unique' => 'пользователь с таким email уже существует',
            'password.required' => 'Это поле должно быть заполнено',
            'email.string' => 'Это поле должно быть строкой',
        ];
    }
}