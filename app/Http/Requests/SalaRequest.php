<?php

namespace web\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalaRequest extends FormRequest
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
                'descricao' => 'required|max:100',
                'ramal' => 'required|max:100',
                'predio_id'=> 'required|max:100',
        
        ];
    }

     public function messages()
    {
      return [
                'descricao.required' => 'O :attribute  não pode ficar vazio.', 
                'ramal.required' => 'O :attribute  não pode ficar vazio.', 
                'predio_id'=> 'O :attribute  não pode ficar vazio.', 

      ];
    }
}
