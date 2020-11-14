<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicamento;


class ControladorMedicamento extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cadastros.medicamento');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicamentos = new Medicamento();
        $medicamentos->idmedicamento = $request->input('idmedicamento');
        $medicamentos->nome_medicamento = $request->input('nome_medicamento');
        $medicamentos->descricao = $request->input('descricao');
        $medicamentos->unidade = $request->input('unidade');
        $medicamentos->quantidade = $request->input('quantidade');
        $medicamentos->valor = $request->input('valor');
        $medicamentos->save();
        return redirect('/inicial/buscarProduto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idmedicamento)
    {
        $medicamentos = Medicamento::find($idmedicamento);
        if(isset($materials)){
            return view('cadastros.editarMedicamento', compact('materials'));
        }
        return redirect('inicial/buscarProduto');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idmedicamento)
    {
        $medicamentos = Medicamento::find($idmedicamento);
            if(isset($medicamentos)){
                $medicamentos->delete();
            }
            return redirect('inicial/buscarProduto');
    }
}
