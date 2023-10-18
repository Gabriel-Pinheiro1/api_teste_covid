<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAtendimentoRequest;
use App\Http\Requests\UpdateAtendimentoRequest;
use App\Models\Atendimento;

class AtendimentoController extends Controller
{
    protected $atendimento;

    public function __construct(Atendimento $atendimento)
    {
        $this->atendimento = $atendimento;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $atendimento = $this->atendimento->all();
        return response()->json([$atendimento],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAtendimentoRequest $request)
    {
        $data = $request->all();
        $atendimento = $this->atendimento->create($data);
        return response()->json([$atendimento],201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $atendimento = $this->atendimento->with('paciente')->find($id);
        return response()->json([$atendimento],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Atendimento $atendimento)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAtendimentoRequest $request,$id)
    {
        $atendimento = $this->atendimento->find($id);
        if(!$atendimento){
            return response()->json(['ERRO'=> 'ATENDIMENTO NÃO ENCONTRADO '], 404);
        } else{
            $data = $request->validated();
            $atendimento->update($data);
            return response()->json([$atendimento], 200);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $atendimento = $this->atendimento->find($id);
        if(!$atendimento){
            return response()->json(['ERRO'=> 'ATENDIMENTO NÃO ENCONTRADO '], 404);
        } else{
            
            $atendimento->delete();
            return response()->json(['SUCESSO' => 'ATENDIMENTO EXCLUIDO COM SUCESSO' ],200);
        }
        
    }
}
