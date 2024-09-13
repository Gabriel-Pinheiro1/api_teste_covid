<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Medico;
use App\Http\Requests\StoreMedicoRequest;
use App\Http\Requests\UpdateMedicoRequest;

class MedicoController extends Controller
{
    protected $medico;

    public function __construct(Medico $medico){
        $this->medico = $medico;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medico = $this->medico->all();
        return response()->json([$medico],200);
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
    public function store(StoreMedicoRequest $request)
    {
        $data = $request->all();
        $medico = $this->medico->create($data);
    
        return response()->json(['MEDICO CADASTRADO COM SUCESSO!'],201);
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $medico = $this->medico->find($id);

        return response()->json([$medico],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicoRequest $request,$id)
    {
        $medico = $this->medico->find($id);
        
        if(!$medico){
            return response()->json(['MEDICO NAO ENCONTRADO'],404);
        }

        $data = $request->all();
        $medico->update($data);

        return response()->json([$medico],201);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $medico = $this->medico->find($id);
        
        if(!$medico){
            return response()->json(['MEDICO NAO ENCONTRADO'],404);
        }

        $medico->delete();
        return response()->json(['SUCESSO' => 'MEDICO EXCLUÍDo COM SUCESSO'], 200);
        
    }
}
