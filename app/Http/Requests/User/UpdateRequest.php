<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'email' => 'required|string|email|unique:users,email,'. $this->user_id,
            'user_id' => 'required|integer|exists:users,id',
            'password' => 'nullable|string|min:8',
        ];
    }

    public function messages()
    {
        return [
          'name.required' => 'Это поле необходимо заполнить',
          'email.required' => 'Это поле необходимо заполнить',
          'password.min' => 'Пароль должен содержать не менее 8 символов',
          'email.unique' => 'Пользователь с такой почтой уже существует',
          'email.email' => 'Введенные данные не соответствуют типо данных "Email"',
        ];
    }
}
