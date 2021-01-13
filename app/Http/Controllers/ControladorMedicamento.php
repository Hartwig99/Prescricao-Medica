<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicamento;
use App\Unidade;

class ControladorMedicamento extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = Unidade::all();
        $medicamentos = Medicamento::all();
        return view('cadastros.medicamento', compact('medicamentos','unidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastros.novoMedicamento');
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
        return redirect('/inicial/buscarMedicamento');
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
        if(isset($medicamentos)){
            return view('cadastros.editarMedicamento', compact('medicamentos'));
        }
        return redirect('inicial/buscarMedicamento');

    }

     // Update the specified resource in storage.
     
    public function update(Request $request, $idmedicamento)
    {
        $medicamentos =  Medicamento::find($idmedicamento);
        if(isset($medicamentos)){
            $medicamentos->idmedicamento = $request->input('idmedicamento');
            $medicamentos->nome_medicamento = $request->input('nome_medicamento');
            $medicamentos->descricao = $request->input('descricao');
            $medicamentos->unidade = $request->input('unidade');
            $medicamentos->quantidade = $request->input('quantidade');
            $medicamentos->valor = $request->input('valor');
            $medicamentos->save();
        }
        return redirect('inicial/buscarMedicamento');

    }
 
    public function destroy($idmedicamento)
    {
        $medicamentos = Medicamento::find($idmedicamento);
            if(isset($medicamentos)){
                $medicamentos->delete();
            }
            return redirect('inicial/buscarMedicamento');
    }
}
