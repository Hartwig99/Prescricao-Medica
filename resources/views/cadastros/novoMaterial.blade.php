@extends('layout.cabecalho', ["current" => "cadastros.material"]);

@section('body')
<link href="{{ asset('css/novomaterial.css')}}"  rel="stylesheet">
<div class="card border ajustes">
    <div class="card-body">
        <form action="/cadastros/material" method="POST">
            @csrf
            <div class="form-group col-md-6">
                <label for="idmaterial">Codigo</label>
                <input type="text" class="form-control" name="idmaterial" id="idmaterial">
            </div>

                <div class="form-group col-md-6">
                    <label for="nome_material">Nome do Material</label>
                    <input type="text" class="form-control" name="nome_material" id="nome_material">
                </div>
                <div class="col-md-6 mb-6 divisor">
                    <label for="unidade">Unidade</label>
                    <select class="custom-select "  name="unidade" id="unidade" required>
                      <option selected disabled value="">Selecione...</option>
                      <option>...</option>
                    </select>
                  </div>
 
            <div class="form-group col-md-10 md-10 divisor">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao" >
            </div>

                <div class="form-group col-md-6 divisor">
                    <label for="quantidade">Quantidade</label>
                    <input type="int" class="form-control" name="quantidade" id="quantidade">
                </div>

                <div class="form-group col-md-6 divisor">
                    <label for="valor">Preço em R$ </label>
                    <input type="double" class="form-control" name="valor" id="valor">
                </div>
            
            <button type="submit" class="btn btn-primary btn-sm">Adicionar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

