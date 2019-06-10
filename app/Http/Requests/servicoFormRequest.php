<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class servicoFormRequest extends FormRequest
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
            'name' => 'required|min:5',
            'email' => 'required|email',
            'cnpj' => 'required|min:14',
            'senha' => 'required|min:8|max:16'
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'O prenchimento é obrigatorio ',
            'name.min' => 'Precisa de 5 caraceteres',
            'email.required' => 'O prenchimento é obrigatorio',
            'email.email'=> 'campo do tipo email',
            'cnpj.required' => 'O prenchimento é obrigatorio',
            'cnpj.min'=>'Precisa de 14 numeros',
            'senha.required' => 'O prechimento é obrigatorio ',
            'senha.min' => 'No minimo 8 caracteres',
            'senha.max' =>'no maximo 16 caracteres'
        ];
    }
}
