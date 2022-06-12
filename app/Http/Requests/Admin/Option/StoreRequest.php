<?php

namespace App\Http\Requests\Admin\Option;

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
            'question_id' => [
                'required',
                'integer',
            ],
            'option_text' => [
                'required',
            ],
            'points' => [
                'required',
            ],
        ];
    }

    public function messages()
    {
        return [
            'option_text.required' => 'Это поле необходимо заполнить',
        ];
    }
}
