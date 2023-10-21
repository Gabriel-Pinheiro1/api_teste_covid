<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAtendimentoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'febre' => [
                'required',
                'boolean'
            ],

            'coriza' => [
                'required',
                'boolean'
            ],

            'nariz_entupido' => [
                'required',
                'boolean'
            ],

            'cansaco' => [
                'required',
                'boolean'
            ],

            'tosse' => [
                'required',
                'boolean'
            ],

            'dor_cabeca' => [
                'required',
                'boolean'
            ],

            'dor_corpo' => [
                'required',
                'boolean'
            ],

            'dor_garganta' => [
                'required',
                'boolean'
            ],

            'mal_estar' => [
                'required',
                'boolean'
            ],

            'dificuldade_respirar' => [
                'required',
                'boolean'
            ],

            'dificuldade_locomocao' => [
                'required',
                'boolean'
            ],

            'falta_paladar' => [
                'required',
                'boolean'
            ],

            'falta_olfato' => [
                'required',
                'boolean'
            ],

            'diarreia' => [
                'required',
                'boolean'
            ],

            'condicao_atendimento' => [
                'required',
                
            ],

            'fCardiaca' => [
                'required',
                
            ],

            'fRespiratoria' => [
                'required',
                
            ],

            'pressaoSis' => [
                'required',
                
            ],

            'pressaoDis' => [
                'required',
                
            ],

            'temperatura' => [
                'required',
                
            ],
        ];
    }
}
