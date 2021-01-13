<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedimento;
use App\Material;
use App\Medicamento;
use App\Via;
use App\Exame;
use App\Item_material;
use App\Item_medicamento;
use App\Pessoa;
use App\Unidade;


class ControladorPrescricao extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::all();
        $medicamentos = Medicamento::all();
        $unidades = Unidade::all();
        $vias = Via::all();
        return view('cadastros.prescricao', compact('materials','medicamentos','vias','unidades'));
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


        $procedimentos = new Procedimento();
        $item_materials = new Item_material();
        $item_medicamentos = new Item_medicamento();
       

        $procedimentos->nome_completo = $request->input('nome_completo');
        $procedimentos->pessoas_idpessoa = $request->input('pessoas_idpessoa');
        $procedimentos->convenio = $request->input('convenio');
        $procedimentos->exames_idexame = $request->input('exames_idexame');
        $procedimentos->idprocedimento = $request->input('idprocedimento');
        $procedimentos->data = $request->input('data');
        $procedimentos->observacao = $request->input('observacao');
        $procedimentos->nome_enfermeiro = $request->input('nome_enfermeiro');
        $procedimentos->medicos_idmedico = $request->input('medicos_idmedico');


        //material
        
        $item_materials->material = $request->input('material');
        $item_materials->unidade = $request->input('unidade');
        $item_materials->qt_material = $request->input('qt_material');
        

        // medicamento
        $item_medicamentos->medicamento = $request->input('medicamento');
        $item_medicamentos->unidade = $request->input('unidade');
        $item_medicamentos->qt_medicamento = $request->input('qt_medicamento');
        $item_medicamentos->vias_idvias = $request->input('vias_idvias');


        
        $procedimentos->save();
        $item_materials->save();
        $item_medicamentos->save();
        
        return redirect('/inicial/consultar');

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
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
