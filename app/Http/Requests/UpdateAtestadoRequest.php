<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAtestadoRequest extends FormRequest {
    public function authorize() {
        return true; // Permite a requisição
    }

    public function rules() {
        return [
            'paciente_id' => 'sometimes|required|exists:pacientes,id',
            'medico_id' => 'sometimes|required|exists:medicos,id',
            'descricao' => 'sometimes|required|string',
            'data_atestado' => 'sometimes|required|date'
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