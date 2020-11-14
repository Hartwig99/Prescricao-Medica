<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Prescricao Medica Eletronica</title>
	<link href="{{ asset('css/cabecalho.css')}}"  rel="stylesheet">
	
  </head>

<body>
 
	
	<form class="formulario">	

        <div class=" form-group  text-center texto ">
			<h1>Buscar medicamentos</h1>
			<img class="image" src="/img/medicamentos.jpg"/>
        </div>	
        
        <h5 class="divisor"> Todos os medicamentos cadastrados esta disponivel na tabela abaixo: </h5>
        <p>Medicamento é o produto farmacêutico, tecnicamente obtido ou elaborado com finalidade profilática, curativa, paliativa ou para fins de diagnóstico.</p>
		<p> A definição legal deixa claro o papel fundamental desse produto, que previne doenças, mantém e recupera a saúde e alivia sintomas. Por isso o Idec entende que medicamentos não podem ser vistos como bens comuns, de uso ordinário, e sim como produtos essenciais. </p> 
          
        <div class="form-inline input-group ajuste">
			<input class="form-control mr-sm-2" type="text" placeholder="Digite o Material ou Medicamento " >
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar por Medicamento</button>
		  </div>

			
		<div class="card-body">
			<h5>Exibindo Material<h5>
        
		@if(count($medicamentos) > 0)				
<table  class= "table table-hover">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nome do produto</th>
            <th>descricao</th>
            <th>Unidade</th>
            <th>Quantidade</th>
            <th>Preco</th>
        </tr>
    </thead>
    <tbody>
    
        @foreach ($medicamentos as $medicamento)

        <tr>
            <td>{{$medicamento->idmedicamento}}</td>
            <td>{{$medicamento->nome_medicamento}}</td>
            <td>{{$medicamento->descricao}}</td>
            <td>{{$medicamento->unidade}}</td>
            <td>{{$medicamento->quantidade}}</td>
            <td>{{$medicamento->valor}}</td>
            <td>
            <a href="/cadastros/medicamento/editar/{{$medicamento->idmedicamento}}" class="btn btn-success" role="button"> Editar</a>
            <a href="/cadastros/medicamento/apagar/{{$medicamento->idmedicamento}}" class="btn btn-danger" role="button"> Apagar</a>
            </td>	
        </tr>

        

        @endforeach

    </tbody>
</table>
@endif


</div>

   <div class="card-footer">
            {{$medicamentos->links()}}
   </div>


   <div class="card-footer">
        <a href="/cadastros/medicamento" class="btn btn-success" role="button"> Adicionar novo medicamento</a>
        <a href="#" download="tabela.xls" class="btn btn-dark" role="button">Baixar Arquivo em XLS (Excel)</a>
       </div>
   
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</form>		
    
	   
	</form>		
			 
</body>
</html>