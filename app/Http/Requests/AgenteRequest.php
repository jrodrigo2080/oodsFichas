<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgenteRequest extends FormRequest
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
            'nome'=>'required|min:3|max:100|unique:agentes,nome',
            'tipoAgente'=>['required']
        ];
    }

    public function messages(){
        return [
            'nome.required'=>'O nome é um campo obrigatório.',
            'nome.unique'=>'O nome desse agente já se encontra em nossa base.',
            'tipoAgente.required'=>'Selecione o tipo do agente.',
        ];
    }
}
