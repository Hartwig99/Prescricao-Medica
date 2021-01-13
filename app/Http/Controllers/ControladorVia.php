<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Via;

class ControladorVia extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vias = Via::all();
        return view('cadastros.via', compact('vias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastros.novaVia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vias = new Via();
        $vias->idvias = $request->input('idvias');
        $vias->nome = $request->input('nome');
        $vias->sigla = $request->input('sigla');
        $vias->observacao = $request->input('observacao');
        $vias->save();
        return redirect('/inicial/buscarVia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idvias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idvias)
    {
        $vias = Via::find($idvias);
        if(isset($vias)){
            return view('cadastros.editarVia', compact('vias'));
        }
        return redirect('inicial/buscarVia');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idvias)
    {
        $vias = Via::find($idvias);
        if(isset($vias)){
            $vias->idmaterial = $request->input('idvias');
            $vias->nome_material = $request->input('nome');
            $vias->sigla = $request->input('sigla');
            $vias->observacao = $request->input('observacao');
            $vias->save();
            
    
        }
        return redirect('/cadastros/via');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idvias)
    {
        $vias = Via::find($idvias);
        if(isset($vias)){
            $vias->delete();
        }
        return redirect('inicial/buscarVia');
    
    }
}
