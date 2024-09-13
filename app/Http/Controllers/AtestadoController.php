<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAtestadoRequest;
use App\Http\Requests\UpdateAtestadoRequest;


class AtestadoController extends Controller
{
    protected $atestado;

    public function __construct($atestado)
    {
        $atestado = $this->atestado;
    }

    
    public function index()
    {
      $atestado = $this->atestado->all(); 
      return response()->json([$atestado],200);
    }

    
    
    public function store(StoreAtestadoRequest $request)
    {
       $data = $request->all();
       $atestado = $this->atestado->create($data);

       return response()->json([$atestado],201);

    }


    public function show($id)
    {
        $atestado = $this->atestado->find($id);

        return response()->json([$atestado],200);
    }

   

    public function update(UpdateAtestadoRequest $request,  $id)
    {
        $atestado = $this->atestado->find($id);

        if(!$atestado){
            return response()->json(['ATESTADO NÃO ENCONTRADO EM NOSSA BASE DE DADOS'],404);
        }       

        $data = $request->all();
        $atestado->update($data);

        return response()->json([$atestado],201);
    }

    

    public function destroy( $id)
    {
        $atestado = $this->atestado->find($id);

        if(!$atestado){
            return response()->json(['ATESTADO NÃO ENCONTRADO EM NOSSA BASE DE DADOS'],404);
        }       

        $atestado->delete();

        return response()->json(['ATESTADO DELETADO COM SUCESSO'],201);
    }
}
