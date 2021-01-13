@extends('layout.cabecalho')
@extends('layout.prescricao')

@section('conteudo') 

<!-- Begin Page Content -->
<link href="{{ asset('css/prescricao.css')}}"  rel="stylesheet">
<meta name="csrf-token" content="{{csrf_token()}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<h1> Realizar Prescrição Médica</h1>
<div id="comp-k1ko01oqline" class="style-k1ko0fxbline"></div>
<div class="container-fluid">

    <form class="formulario" method="POST">
      @csrf
      <div class="form-row">
        <div class="col-md-6 mb-6">
          <label for="nome_completo"> Nome Completo do Paciente</label>
          <input type="text" class="form-control " name="nome_completo" id="nome_completo"  required>
        </div>
        <div class="col-md-3 mb-3 margin25px">
          <label for="pessoas_idpessoa">Codigo do paciente</label>
          <div class="input-group">
            <input type="int" class="form-control " name="pessoas_idpessoa" id="pessoas_idpessoa" required>
            <div class="invalid-feedback">
              Por favor inserir o codigo do Paciente.
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-6">
          <label for="convenio">Convenio</label>
          <input type="text" class="form-control " name="convenio" id="convenio"  required>
        </div>
        <br>
        <div class="col-md-3 mb-3 margin25px">
          <label for="exames_idexame">Codigo do Exames</label>
          <div class="input-group">
            <input type="int" class="form-control " name="exames_idexame" id="exames_idexame" required>
            <div class="invalid-feedback">
              Por favor inserir o codigo do Exames.
            </div>
          </div>
        </div>
        
        <div class="col-md-4 mb-4 separar">
          <label for="idprocedimento">Codigo da Prescrição</label>
          <div class="input-group">
            <input type="int" class="form-control " name="idprocedimento" id="idprocedimento" required>
            <div class="invalid-feedback">
              Por favor inserir o codigo da Prescrição.
            </div>
          </div>
        </div>
      
        <div class="col-md-3 mb-3 separar margin25px">
          <label for="data">Data</label>
          <input type="date" class="form-control " name="data" id="data" required>
          <div class="invalid-feedback">
            Por favor inserir a data.
          </div>
        </div>
      </div>

        <h3>Materiais</h3>
        <div class="form-row separar " id="formulario">
          <div class="col-md-3 mb-3">
            <label for="qt_material">Quantidade Utilizada</label>
            <input type="int" class="form-control " name="qt_material" id="qt_material" required>
           
          </div>
          
          <div class="col-md-3 mb-3  ">
            <label for="unidade">Unidade</label>
            <select  name="unidade" class="form-control input sm " id="unidade" required>     
              <option selected disabled value="">Selecione...</option>
              @foreach ($unidades as $unidade)
              <option value="{{$unidade->idunidades}}">{{$unidade->nome}}</option>
              @endforeach
            </select>  
          </div>

  
          <div class="col-md-3 mb-3">
            <label for="material">Descrição</label>
            <select  name="material" class="form-control input sm " id="material" required>     
              <option selected disabled value="">Selecione...</option>
              @foreach ($materials as $material)
              <option value="{{$material->idmaterial}}">{{$material->nome_material}}</option>
              @endforeach
            </select>
          </div>
         
        </div>
        <button class="btn btn-dark" id="add-campo" >Adicionar Mais Material</button>

        <h3>Medicamentos</h3>

      <div class="form-row separar" id="formulario2">
        <div class="col-md-3 mb-3">
          <label for="qt_medicamento">Quantidade Utilizada</label>
          <input type="text" class="form-control " name="qt_medicamento" id="qt_medicamento" required>
         
        </div>
      

        <div class="col-md-3 mb-3">
          <label for="unidade">Unidade</label>
            <select  name="unidade" class="form-control input sm " id="unidade" required>     
              <option selected disabled value="">Selecione...</option>
              @foreach ($unidades as $unidade)
              <option value="{{$unidade->idunidades}}">{{$unidade->nome}}</option>
              @endforeach
            </select>
        </div>

        <div class="col-md-3 mb-3">
          <label for="medicamento">Descrição</label>
          <select class="custom-select " id="medicamento" name="medicamento" required>
            <option selected disabled value="">Selecione...</option>
            @foreach ($medicamentos as $medicamento)
            <option value="{{$medicamento->idmedicamento}}">{{$medicamento->nome_medicamento}}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-3 mb-3">
          <label for="vias_idvias">VIA</label>
          <select class="custom-select " id="vias_idvias" name="vias_idvias" required>
            <option selected disabled value="">Selecione...</option>
            @foreach ($vias as $via)
            <option value="{{$via->idvias}}">{{$via->sigla}}</option>
            @endforeach
          </select>
          </div>
      </div> 
        

      <button class="btn btn-dark" id="add-campo2" >Adicionar Mais Medicamentos</button>

      <div class="form-group separar">
        <label for="Observacao">Outras Informações (Observações)</label>
        <textarea class="form-control" name="observacao" id="Observacao" rows="3"></textarea>
      </div>

      <div class="col-md-10 mb-10">
        <label for="nome_enfermeiro"> Nome do Enfermeiro Responsavel </label>
        <input type="text" class="form-control " name="nome_enfermeiro" id="nome_enfermeiro"  required>
      </div>

      <div class="col-md-6 mb-6 separar">
        <label for="medicos_idmedico">Codigo do Médico Realizante</label>
        <div class="input-group">
          <input type="int" class="form-control " name="medicos_idmedico" id="medicos_idmedico" required>
          <div class="invalid-feedback">
            Por favor inserir o codigo do Médico Realizante.
          </div>
        </div>
        <button class="btn btn-success separar" onclick="return confirm('Deseja realmente realizar cadastro da prescrição ?');"  type="submit">REGISTRAR DADOS</button> 
    </div>


    </form>
    
    <script>
      //https://api.jquery.com/click/
      $("#add-campo").click(function () {
        $("#formulario").append('<div class="col-md-10 mb-10" ><h6> * Novo Material <h6> </div>');
          $("#formulario").append('<div class="col-md-3 mb-3"><label for="qt_material">Quantidade</label><input type="int" class="form-control " id="quantidade_mat" required></div>');
          $("#formulario").append('<div class="col-md-3 mb-3 "><label for="unidade_mat">Unidade</label><select class="custom-select " id="unidade_mat" required><option selected disabled value="">Selecione...</option><option>...</option></select></div>');
          $("#formulario").append('<div class="col-md-3 mb-3"><label for="descricao_mat">Descrição</label><select  name="material" class="form-control input sm " id="material" required> <option selected disabled value="">Selecione...</option>  @foreach ($materials as $material) <option value="{{$material->idmaterial}}">{{$material->nome_material}}</option> @endforeach </select> </div>');
    
      });

      $("#add-campo2").click(function () {
      $("#formulario2").append('<div class="col-md-10 mb-10" ><h6> * Novo Medicamento <h6> </div>');  
      $("#formulario2").append('<div class="col-md-3 mb-3"><label for="qt_medicamento">Quantidade</label><input type="text" class="form-control " id="quantidade_med" required></div>');
      $("#formulario2").append('<div class="col-md-3 mb-3"><label for="unidade_med">Unidade</label> <select class="custom-select " id="validationServer04" required> <option selected disabled value="">Selecione...</option> <option>...</option> </select> </d  ');
      $("#formulario2").append('<div class="col-md-3 mb-3"> <label for="descricao_med">Descrição</label> <select class="custom-select " id="medicamento" name="medicamento" required> <option selected disabled value="">Selecione...</option>      @foreach ($medicamentos as $medicamento)<option value="{{$medicamento->idmedicamento}}">{{$medicamento->nome_medicamento}}</option>  @endforeach    </select>  </div>');
      $("#formulario2").append('<div class="col-md-3 mb-3"><label for="via">VIA</label> <select class="custom-select " id="via" name="via" required>  <option selected disabled value="">Selecione...</option>  @foreach ($vias as $via) <option value="{{$via->idvias}}">{{$via->sigla}}</option>  @endforeach  </select>  </div> </div>');
  });
  </script>


  </div>
  
 
@endsection