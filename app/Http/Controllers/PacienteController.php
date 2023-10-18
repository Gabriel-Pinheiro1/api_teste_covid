<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;
use App\Http\Resources\PacienteResource;
use Illuminate\Support\Facades\Storage;
use App\Models\Paciente;

class PacienteController extends Controller
{
    protected $paciente;
    public function __construct(Paciente $paciente)
    {
        $this->paciente = $paciente;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Paciente $pacientes)
    {
        $pacientes = $this->paciente->all();
        return PacienteResource::collection($pacientes);
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePacienteRequest $request)
    {
        $data = $request->validated();
        $data['imagem'] = $request->file('imagem')->store('imagem', 'public');
        $paciente = $this->paciente->create($data);
        return new PacienteResource($paciente);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $paciente = $this->paciente->with('atendimentos')->find($id);
        if(!$paciente){
            return response()->json(['ERRO' => 'Usuário não encontrado'],404);
        } 
        return response()->json([$paciente],200);
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePacienteRequest $request, $id)
    {
        
        $paciente = $this->paciente->with('atendimentos')->find($id);
        if(!$paciente){
            return response()->json(['ERRO' => 'Usuário não encontrado'],404);
        } 
        if($request->file('imagem')){
            Storage::disk('public')->delete($paciente->imagem);
        }
        $data = $request->validated();
        if(array_key_exists('imagem', $data)){
            $data['imagem'] = $request->file('imagem')->store('imagem', 'public');
        }
      
        $paciente->update($data);
        return new PacienteResource($paciente);
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $paciente = $this->paciente->find($id);
        if(!$paciente){
            return response()->json(['ERRO' => 'Usuário não encontrado'], 404);
        }
       
        Storage::disk('public')->delete($paciente->imagem);
        
        $paciente->delete();
        return response()->json(['SUCESSO' => 'Usuário deletado com sucesso'], 204);
    }
}
