<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
use App\Http\Requests\StoreNotaRequest;
use App\Http\Requests\UpdateNotaRequest;


class NotaController extends Controller
{
    protected $nota;

    public function __construct(Nota $nota)
    {
        $this->nota = $nota;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nota = $this->nota->all();
        return response()->json([$nota], 200);
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
    public function store(StoreNotaRequest $request)
    {
        $data = $request->all();
        $nota = $this->nota->create($data);
        return response()->json([$data],201);

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $nota = $this->nota->find($id);
        return response()->json([$nota],200);
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
    public function update(UpdateNotaRequest $request, $id)
    {
        $nota = $this->nota->find($id);
        if (!$nota) {
            return response()->json(['ERRO' => 'NOTA NÃO ENCONTRADA'], 404);
        }

        $data = $request->all();
        $nota->update($data);
        return response()->json([$nota], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nota = $this->nota->find($id);

        if(!$nota){
            return response()->json(['ERRO' => 'NOTA NÃO ENCONTRADA'],404);
        }

        $nota->delete();
        return response()->json(['SUCESSO' => 'NOTA EXCLUÍDA COM SUCESSO'], 200);
    }
}
