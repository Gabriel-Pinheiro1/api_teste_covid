<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atestado extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id', 'medico_id', 'descricao', 'data_atestado'
    ];

    public function medico() {
        return $this->belongsTo(Medico::class);
    }

    public function paciente() {
        return $this->belongsTo(Paciente::class);
    }
}
