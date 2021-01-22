@extends('layout.cabecalho')


@section('conteudo')

<form >	

    <link href="{{ asset('css/cabecalho.css')}}"  rel="stylesheet">
    <link href="{{ asset('css/consultar.css')}}"  rel="stylesheet">
    

    <div class=" form-group  text-center formulario ">
        <h1>Buscar por Prescrição Médica</h1>		
        
    </div>

      <div class="form-inline input-group  col-md-6 ajustes formulario">
        <input class="form-control mr-sm-2" type="text" placeholder="Digite o codigo da Prescrição " >
        <button class="btn btn-success my-2 my-sm-0" type="submit">Procurar por Procedimento</button>
      </div>

      <div class="col-sm-3 mb-3 mb-sm-0 divisor ">
        <label for="data">Filtrar por Data de Realização</label>
        <br><br/>
        
    </div>

    <div class="col-sm-3 mb-3 mb-sm-0 data-filtro">
    <input type="date" class="form-control form-control-user" id="data" placeholder="00/00/0000">
    </div>
        
    <br>
    <br>

    <div  class="card-body div-tabela">
    <table  class= "tabela  ">

        <thead>
            <tr>
                <th>Código da Prescrição</th>
                <th>Convênio</th>
                <th>Código do Paciente</th>
                <th>Código do Exame</th>
                <th>Data Realizada</th>
                <th>Observação</th>
                
            </tr>
        </thead>

        <tbody>
            @foreach ($procedimentos as $procedimento)

            <tr>
                <td>{{$procedimento->idprocedimento}}</td>
                <td>{{$procedimento->convenio}}</td>
                <td>{{$procedimento->pessoas_idpessoa}}</td>
                <td>{{$procedimento->exames_idexame}}</td>
                <td>{{$procedimento->data}}</td>
                <td>{{$procedimento->observacao}}</td>
                <td>
                <a href="/cadastros/prescricao/editar/{{$procedimento->idprocedimento}}" class="btn btn-success" role="button"> Editar</a>
                <br>
                <a href="/cadastros/prescricao/apagar/{{$procedimento->idprocedimento}}" class="btn btn-danger" role="button"
                    onclick="return confirm('Deseja realmente excluir o registro da Prescrição Médica realizada ?');"> Apagar</a>
                </td>	
            </tr>
            @endforeach		
        </tbody>
    </table>
    </div>

    <div class="card-footer divisor">
        <a href="/cadastros/prescricao" class="btn btn-info" role="button"> Adicionar Nova Prescrição </a>

        <a href="#" download="prescricao.doc" class="btn btn-dark" role="button">Baixar dados em Arquivo formato Word</a>
    </div>

    </div>

    


       
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
      
</form>		

@endsection

