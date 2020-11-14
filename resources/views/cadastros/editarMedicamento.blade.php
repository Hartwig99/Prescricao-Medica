@extends('layout.cabecalho')

@section('body')

<link href="{{ asset('css/novomaterial.css')}}"  rel="stylesheet">

<div class="texto"> 
    <img src="/img/editar2.png" />
    <h3> Adicionou o nome do Material Errado ?</h3> 

    <p>  Para alterar os dados que foram adicionado errados é necessario informar os dados corretos nos campos que deseja alteração, 
        sendo assim clicar em salvar para que as alteracoes seja realizadas com sucesso </p>
</div>

<div class=" ajustes">

    <h1> Editar Medicamentos</h1>
     
    <div class="card-body">
        <form action="/cadastros/medicamento/{{$medicamentos->idmedicamento}}" method="POST">
            @csrf
            <div class="form-group col-md-6">
                <label for="idmedicamento">Codigo</label>
            <input type="text" class="form-control" name="idmedicamento" id="idmedicamento" value="{{$medicamentos->idmedicamento}}">
            </div>

                <div class="form-group col-md-6">
                    <label for="nome_medicamento">Nome do Medicamento</label>
                    <input type="text" class="form-control" name="nome_medicamento" id="nome_medicamento" value="{{$medicamentos->nome_medicamento}}">
                </div>
                <div class="col-md-6 mb-6 divisor">
                    <label for="unidade">Unidade</label>
                    <select class="custom-select "  name="unidade" id="unidade" required value="{{$medicamentos->unidade}}">
                      <option selected disabled value="">Selecione...</option>
                      <option>...</option>
                    </select>
                  </div>
 
            <div class="form-group col-md-10 md-10 divisor">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao" value="{{$medicamentos->descricao}}" >
            </div>

                <div class="form-group col-md-6 divisor">
                    <label for="quantidade">Quantidade</label>
                    <input type="int" class="form-control" name="quantidade" id="quantidade" value="{{$medicamentos->quantidade}}">
                </div>

                <div class="form-group col-md-6 divisor">
                    <label for="valor">Preço em R$ </label>
                    <input type="double" class="form-control" name="valor" id="valor" value="{{$medicamentos->valor}}">
                </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

    
