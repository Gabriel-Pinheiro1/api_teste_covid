<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAtestadoRequest extends FormRequest {
    public function authorize() {
        return true; // Permite a requisição
    }

    public function rules() {
        return [
            'paciente_id' => 'required|exists:pacientes,id',
            'medico_id' => 'required|exists:medicos,id',
            'descricao' => 'required|string',
            'data_atestado' => 'required|date'
        ];
    }

    public function messages() {
        return [
            'paciente_id.required' => 'O paciente é obrigatório.',
            'paciente_id.exists' => 'O paciente informado não existe.',
            'medico_id.required' => 'O médico é obrigatório.',
            'medico_id.exists' => 'O médico informado não existe.',
            'descricao.required' => 'A descrição do atestado é obrigatória.',
            'data_atestado.required' => 'A data do atestado é obrigatória.',
            'data_atestado.date' => 'A data do atestado deve ser uma data válida.'
        ];
    }
}