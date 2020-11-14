<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Prescricao Medica Eletronica</title>
	<link href="{{ asset('css/cabecalho.css')}}"  rel="stylesheet">
	
  </head>

<body>
 
	
	<form class="formulario" action="{{ route('inicial.buscarMaterial.search')}}" method="post">	
		<div class=" form-group  text-center texto ">
			<h1>Buscar Material</h1>
			<img class="image-material" src="/img/material.jpg"/>
		</div>	

		<h5 class="divisor"> Todos os materiais cadastrados esta disponivel na tabela abaixo: </h5>
        <p>O material hospitalar descartável - também chamado de material de consumo hospitalar - são aqueles itens usados no dia a dia de atendimentos médicos que não podem ser reutilizados e precisam ter os estoques reabastecidos periodicamente. Tratam-se de artigos fundamentais em qualquer tipo de procedimento e, por serem usados apenas uma vez, oferecem mais segurança aos pacientes, pois afasta o risco de contaminação.</p>
		<p>Não são apenas em hospitais que esses materiais se fazem necessários. Eles também devem estar presentes em postos de saúde, consultórios médicos, clínicas e em ambientes onde exista o risco de contaminação por material biológico, fungos, microorganismos e outros agentes nocivos.</p> 
		 
		
		  <div class="form-inline input-group ajuste">
			@csrf
			<input class="form-control mr-sm-2" name="filter" type="text" placeholder="Digite o codigo do Material " >
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar por Material</button>
		</div>
		
			
		<div class="card-body">
			<h5>Exibindo Material<h5>

@if(count($materials) > 0)				
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
			
				@foreach ($materials as $material)

				<tr>
					<td>{{$material->idmaterial}}</td>
					<td>{{$material->nome_material}}</td>
					<td>{{$material->descricao}}</td>
					<td>{{$material->unidade}}</td>
					<td>{{$material->quantidade}}</td>
					<td>{{$material->valor}}</td>
					<td>
					<a href="/cadastros/material/editar/{{$material->idmaterial}}" class="btn btn-success" role="button"> Editar</a>
					<a href="/cadastros/material/apagar/{{$material->idmaterial}}" class="btn btn-danger" role="button"> Apagar</a>
					</td>	
				</tr>

				

				@endforeach
	
			</tbody>
		</table>
	   @endif
	   
	  
		</div>
		@if (isset($filters))
		   <div class="card-footer">
					{{!! $materials->appends($filters)->links() !!}}
		   </div>
		@else   
			<div class="card-footer">
			{{!! $materials->links() !!}}
   			</div>
		@endif
		   

		   <div class="card-footer">
				<a href="/cadastros/material" class="btn btn-success" role="button"> Adicionar novo material</a>

				<a href="#" download="tabela.xls" class="btn btn-dark" role="button">Baixar Arquivo em XLS (Excel)</a>
   			</div>
		   
		<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
	</form>		
			 
</body>
</html>