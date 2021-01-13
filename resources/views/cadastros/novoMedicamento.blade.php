@extends('layout.cabecalho', ["current" => "cadastros.medicamento"]);
@section('body')
<link href="{{ asset('css/novomedicamento.css')}}"  rel="stylesheet">
<div class="card border ajustes">
    <div class="card-body">
        <form action="/cadastros/medicamento" method="POST">
            @csrf
            <div class="form-group col-md-6">
                <label for="idmedicamento">Codigo</label>
                <input type="text" class="form-control" name="idmedicamento" id="idmedicamento">
            </div>

            <div class="form-group col-md-6">
                <label for="nome_medicamento">Nome do Medicamento</label>
                <input type="text" class="form-control" name="nome_medicamento" id="nome_medicamento">
            </div>
            
            <div class="col-md-6 mb-6 ">
                <label for="unidade">Unidade</label>
                <select  name="unidade" class="custom-select " id="unidade" required>     
                    <option selected disabled value="">Selecione...</option>
                    @foreach ($unidades as $unidade)
                    <option value="{{$unidade->idunidades}}">{{$unidade->nome}}</option>
                    @endforeach
                  </select>
              </div>
        
        
            <div class=" form-group col-md-10 mb-10 divisor ">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao" >
            </div>

            <div class=" form-group col-md-6 mb-6 divisor">
                <label for="quantidade">Quantidade</label>
                <input type="int" class="form-control" name="quantidade" id="quantidade">
            </div>

            <div class="form-group col-md-6 divisor">
                <label for="valor">Preço em R$ </label>
                <input type="double" class="form-control" name="valor" id="valor">
            </div>
        
            <button type="submit" class="btn  botao">Cadastrar <img class="adicionar" src="/img/adicionar.png"/></button>
           </div>
        </form>
    </div>
</div>
