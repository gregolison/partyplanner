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
            'name.required' => 'O nome é obrigatorio ',
            'name.min' => 'O noem precisa conter no mínimo 5 caraceteres',
            'email.required' => 'O email é obrigatorio',
            'email.email'=> 'O email precisa ser um email válido',
            'cnpj.required' => 'O CNPJ é obrigatorio',
            'cnpj.min'=>'Precisa de no mínimo 14 digitos',
            'senha.required' => 'A senha é obrigatoria ',
            'senha.min' => 'A senha deve ter minimo 8 caracteres',
            'senha.max' =>'A senha deve ter no máximo 16 caracteres'
        ];
    }
}
