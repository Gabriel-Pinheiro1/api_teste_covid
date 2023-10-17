<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->boolean('febre');
            $table->boolean('coriza');
            $table->boolean('nariz_entupido');
            $table->boolean('cansaco');
            $table->boolean('tosse');
            $table->boolean('dor_cabeca');
            $table->boolean('dor_corpo');
            $table->boolean('dor_garganta');
            $table->boolean('mal_estar');
            $table->boolean('dificuldade_respirar');
            $table->boolean('dificuldade_locomocao');
            $table->boolean('falta_paladar');
            $table->boolean('falta_olfato');
            $table->boolean('diarreia');
            $table->string('condicao_atendimento')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimentos');
    }
};
