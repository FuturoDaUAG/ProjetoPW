<?php

namespace web\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SetorRequest extends FormRequest
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
            'descricao' => 'required|max:40',
        ];
    }

    public function messages()
    {
        return [
            'descricao.required' => 'O campo :attribute não pode ficar vazio.',
        ];
    }

}
