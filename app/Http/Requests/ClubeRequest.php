<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClubeRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'codigo'=>'required|unique:clubes,codigo',
            'nome'=>'required|unique:clubes,nome',
        ];
    }

    public function messages(){
        return [
            'nome.required'=>'O nome é um campo obrigatório',
            'codigo.required'=>'O campo codigo é obrigatório',
            'codigo.unique'=>'Codigo já cadastrado em nossa base.',
            'nome.unique'=>'Nome já cadastrado em nossa base.'
        ];
    }
}
