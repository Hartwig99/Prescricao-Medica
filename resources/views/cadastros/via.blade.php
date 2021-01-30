@extends('layout.cabecalho')


@section('conteudo')
<link href="{{ asset('css/cabecalho.css')}}"  rel="stylesheet">
<link href="{{ asset('css/via.css')}}"  rel="stylesheet">

<form  action="/cadastros/via" method="Post">
    @csrf
   
    <div class=" row ajuste">
      <div class=" titulo ">  
          <h2> Cadastros de Tipos de Administracao de Medicamentos e Materiais (VIAS)</h2> 
      </div>           

    <div class="col-md-4 mb-6" >
        <label for="idvias">Código*</label>
        <input type="text" class="form-control"  name="idvias" id="idvias" required>
    </div>

    <div class="col-md-4 mb-6">
        <label for="nome">Nome VIA Administrativa*</label>
        <input type="text" class="form-control" name="nome" id="nome" required>
    </div>
    
    <div class="col-md-4 mb-6 ">
        <label for="sigla">SIGLA do tipo da via*</label>
        <input type="text" class="form-control" name="sigla" id="sigla" required>
      </div>


    <div class=" form-group col-md-6 mb-10  ">
        <label for="observacao">Descrição</label>
        <input type="text" class="form-control" name="observacao" id="observacao" required >
    </div>

    <div class="col-md-6 mb-6">
    <button type="submit" class="btn btn-success botao" onclick="return confirm('Deseja realmente cadastrar a Via Administrativa ?');" >Cadastrar <img class="adicionar" src="/img/adicionar.png"/></button>
    </div>

    <p style="color: brown">Campos com * são obrigatórios</p>
</div>

  </form>




 @endsection
