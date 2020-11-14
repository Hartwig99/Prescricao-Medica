@extends('layout.cabecalho')

@section('conteudo') 

<!-- Begin Page Content -->
<link href="{{ asset('css/prescricao.css')}}"  rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<h1> Realizar Prescrição Médica</h1>
<div class="container-fluid">

    <form class="formulario">
      <div class="form-row">
        <div class="col-md-6 mb-6">
          <label for="nome_completo"> Nome Completo do Paciente</label>
          <input type="text" class="form-control " id="nome_completo"  required>
        </div>
        <div class="col-md-6 mb-6">
          <label for="convenio">Convenio</label>
          <input type="text" class="form-control " id="convenio"  required>
        </div>
        <br>
        <div class="col-md-3 mb-3 separar">
          <label for="idexame">Codigo do Exames</label>
          <div class="input-group">
            <input type="int" class="form-control is-invalid" id="idexame" required>
            <div class="invalid-feedback">
              Por favor inserir o codigo do Exames.
            </div>
          </div>
        </div>
      
        <div class="col-md-3 mb-3 separar">
          <label for="data">Data</label>
          <input type="date" class="form-control is-invalid" id="data" required>
          <div class="invalid-feedback">
            Por favor inserir a data.
          </div>
        </div>
      </div>

        <h3>Materiais</h3>
        <div class="form-row separar " id="formulario">
          <div class="col-md-3 mb-3">
            <label for="quantidade_mat">Quantidade</label>
            <input type="int" class="form-control " id="quantidade_mat" required>
           
          </div>
          <div class="col-md-3 mb-3 ">
            <label for="unidade_mat">Unidade</label>
            <select class="custom-select " id="unidade_mat" required>
              <option selected disabled value="">Selecione...</option>
              <option>...</option>
            </select>
          </div>

          <div class="col-md-3 mb-3">
            <label for="descricao_mat">Descrição</label>
            <input type="text" class="form-control " id="descricao_mat"  required>
          </div>

          <div class="col-md-3 mb-3">
            <label for="via">VIA</label>
            <input type="text" class="form-control " id="via" required>
          </div>
        </div>

        <button class="btn btn-dark" id="add-campo" >Adicionar Mais Material</button>

        <h3>Medicamentos</h3>
      <div class="form-row separar" id="formulario2">
        <div class="col-md-3 mb-3">
          <label for="quantidade_med">Quantidade</label>
          <input type="text" class="form-control " id="quantidade_med" required>
         
        </div>
        <div class="col-md-3 mb-3">
          <label for="unidade_med">Unidade</label>
          
          <select class="custom-select " id="validationServer04" required>
            <option selected disabled value="">Selecione...</option>
            <option>...</option>
          </select>
        </div>

        <div class="col-md-3 mb-3">
          <label for="descricao_med">Descrição</label>
          <input type="text" class="form-control " id="descricao_med"  required>
        </div>

        <div class="col-md-3 mb-3">
          <label for="via">VIA</label>
          <input type="text" class="form-control d" id="via" required>
        </div>
      </div>
      <button class="btn btn-dark" id="add-campo2" >Adicionar Mais Medicamentos</button>

      <div class="form-group separar">
        <label for="Observacao">Outras Informações (Observações)</label>
        <textarea class="form-control" id="Observacao" rows="3"></textarea>
      </div>
      <button class="btn btn-success"  type="submit">REGISTRAR DADOS</button> 
     </div>
    </form>
    
    <script>
      //https://api.jquery.com/click/
      $("#add-campo").click(function () {
        $("#formulario").append('<div class="col-md-10 mb-10" ><h6> * Novo Material <h6> </div>');
          $("#formulario").append('<div class="col-md-3 mb-3"><label for="quantidade_mat">Quantidade</label><input type="int" class="form-control " id="quantidade_mat" required></div>');
          $("#formulario").append('<div class="col-md-3 mb-3 "><label for="unidade_mat">Unidade</label><select class="custom-select " id="unidade_mat" required><option selected disabled value="">Selecione...</option><option>...</option></select></div>');
          $("#formulario").append('<div class="col-md-3 mb-3"><label for="descricao_mat">Descrição</label><input type="text" class="form-control " id="descricao_mat"  required></div>');
          $("#formulario").append('<div class="col-md-3 mb-3"><label for="via">VIA</label><input type="text" class="form-control d" id="via" required></div>');
      });

      $("#add-campo2").click(function () {
      $("#formulario2").append('<div class="col-md-10 mb-10" ><h6> * Novo Medicamento <h6> </div>');  
      $("#formulario2").append('<div class="col-md-3 mb-3"><label for="quantidade_med">Quantidade</label><input type="text" class="form-control " id="quantidade_med" required></div>');
      $("#formulario2").append('<div class="col-md-3 mb-3"><label for="unidade_med">Unidade</label><select class="custom-select " id="unidade_med" required><option selected disabled value="">Selecione...</option><option>...</option></select></div>');
      $("#formulario2").append('<div class="col-md-3 mb-3"><label for="descricao_med">Descrição</label><input type="text" class="form-control " id="descricao_med"  required></div>');
      $("#formulario2").append('<div class="col-md-3 mb-3"><label for="via">VIA</label><input type="text" class="form-control d" id="via" required></div>');
  });
  </script>
  </div>
 
@endsection