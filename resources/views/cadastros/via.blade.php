@extends('layout.cabecalho')
@extends('layout.via')

@section('via')

<link href="{{ asset('css/via.css')}}"  rel="stylesheet">

<div class="row">
                    <div class=" titulo ">  
                        <h2> Cadastros de Tipos de Administracao de Medicamentos e Materiais (VIAS)</h2> 
                        <img class="image " src="/img/vias.jpg">  
                    </div>           
  
                  <div class="form-group col-md-6 divisor">
                      <label for="id">Codigo</label>
                      <input type="text" class="form-control" id="id">
                  </div>
  
                  <div class="form-group col-md-6 divisor">
                      <label for="nome_via">Nome da VIA Administrativa</label>
                      <input type="text" class="form-control" id="nome_via">
                  </div>
                  
                  <div class="col-md-6 mb-6 divisor">
                      <label for="sigla">SIGLA</label>
                      <input type="text" class="form-control" id="sigla">
                    </div>
              
              
                  <div class=" form-group col-md-10 mb-10 divisor ">
                      <label for="descricao">Descrição</label>
                      <input type="text" class="form-control" id="descricao" >
                  </div>
  
                  <button type="submit" class="btn btn-success botao">Cadastrar <img class="adicionar" src="/img/adicionar.png"/></button>

</div>
 @endsection