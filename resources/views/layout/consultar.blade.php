<!DOCTYPE HTML>
<html lang="pt-br">  
    <head>  
        <meta charset="utf-8">
        <link href="{{ asset('css/consultar.css')}}"  rel="stylesheet">
        <link href="{{ asset('css/cabecalho.css')}}"  rel="stylesheet">
    </head>
    <body>

        <form class="formulario">	
			<div class=" form-group  text-center  ">
				<h1>Buscar Prescrição Médica</h1>		
				
			</div>

			  <div class="form-inline input-group  col-md-6 ajustes">
				<input class="form-control mr-sm-2" type="text" placeholder="Digite o codigo da Prescrição " >
				<button class="btn btn-success my-2 my-sm-0" type="submit">Procurar por Procedimento</button>
			  </div>

			  <div class="col-sm-3 mb-3 mb-sm-0 divisor">
				<label for="data">Filtrar por Data de Realização</label>
			  <input type="date" class="form-control form-control-user" id="data" placeholder="00/00/0000">
			</div>
			  

			<div class="card-body ajustes ">
				<h5>Exibindo Procedimentos<h5>
				
			<table  class= "table table-hover ajustes text-light ">

				<thead>
					<tr>
						<th>Codigo da Prescrição</th>
						<th>Codigo do Paciente</th>
						<th>Codigo do Exame</th>
						<th>Data Realizada</th>
						<th>Observação</th>
						
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>12</td>
						<td>1400</td>
						<td>2</td>
						<td>21/02/2020</td>
						<td>teste</td>

						
						
						<td>
						<a href="" class="btn btn-success" role="button"> Editar</a>
						<a href="" class="btn btn-danger" role="button"> Apagar</a>
						</td>	
					</tr>
	
				
		
				</tbody>
			</table>
		  
			</div>

			


	   		<div class="card-footer">
				<a href="/cadastros/prescricao" class="btn btn-info" role="button"> Adicionar nova Prescricao </a>

				<a href="#" download="prescricao.doc" class="btn btn-dark" role="button">Baixar Arquivo dados em Word</a>
		    </div>
	   
	<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
			  
		</form>		
    </body>
    
</html>        