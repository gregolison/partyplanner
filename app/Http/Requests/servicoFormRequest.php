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
            'name' => 'required|min:5|max:190',
            'email' => 'required|email|max:190',
            'cnpj' => 'required|min:14|max:190',
            'senha' => 'required|min:8|max:16'
        ];
    }
}
