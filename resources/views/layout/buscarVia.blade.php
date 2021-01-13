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
 
	<form  action="{{ route('inicial.buscarVia')}}" method="post">	
		
	
		<div class="card-body  " >
			
			@if(count($vias) > 0)				
					<table  class= "tabela" >
						<thead>
							<tr>
								<th>Codigo</th>
								<th>Nome </th>
                                <th>sigla</th>
                                <th>via_administrativa</th>
								<th>observacao</th>
							
							</tr>
						</thead>
						<tbody>
						
							@foreach ($vias as $via)

							<tr>
								<td>{{$via->idvias}}</td>
								<td>{{$via->nome}}</td>
                                <td>{{$via->sigla}}</td>
                                <td>{{$via->via_administrativa}}</td>
								<td>{{$via->observacao}}</td>
							
								<td>
								<a href="/cadastros/material/editar/{{$via->idvias}}" class="btn btn-success" role="button"> Editar</a>
								<br>
								<a href="/cadastros/material/apagar/{{$via->idvias}}" class="btn btn-danger" role="button"> Apagar</a>
								</td>	
							</tr>

							

							@endforeach
				
						</tbody>
					</table>
				@endif
				@yield('via')
		</div>
	</form>