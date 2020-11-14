<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class ControladorMaterial extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cadastros.material');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastros.novoMaterial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materials = new Material();
        $materials->idmaterial = $request->input('idmaterial');
        $materials->nome_material = $request->input('nome_material');
        $materials->descricao = $request->input('descricao');
        $materials->unidade = $request->input('unidade');
        $materials->quantidade = $request->input('quantidade');
        $materials->valor = $request->input('valor');
        $materials->save();
        return redirect('/inicial/buscarMaterial');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idmaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idmaterial)
    {
        
        $materials = Material::find($idmaterial);
        if(isset($materials)){
            return view('cadastros.editarMaterial', compact('materials'));
        }
        return redirect('inicial/buscarMaterial');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idmaterial)
    {
        $materials = Material::find($idmaterial);
        if(isset($materials)){
            $materials->nome_material = $request->input('nome_material');
            $materials->unidade = $request->input('unidade');
            $materials->descricao = $request->input('descriao');
            $materials->quantidade = $request->input('quantidade');
            $materials->valor = $request->input('valor');
            $materials->save();
        }
        return redirect('inicial/buscarMaterial');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idmaterial)
    {
        $materials = Material::find($idmaterial);
            if(isset($materials)){
                $materials->delete();
            }
            return redirect('inicial/buscarMaterial');
        
    }
}
