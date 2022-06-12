<?php

namespace App\Http\Requests\Admin\QuestionOption;

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
            'option_text' => 'required|string',
            'correct' => 'nullable|integer',
            'question_id' => 'required|integer|exists:questions,id',
        ];
    }

    public function messages()
    {
        return [
            'option_text.required' => 'Это поле необходимо заполнить',
        ];
    }
}
