@extends('layout.cabecalho')



@section('conteudo')

<link href="{{ asset('css/cabecalho.css')}}"  rel="stylesheet">
<link href="{{ asset('css/buscarMedicamento.css')}}"  rel="stylesheet">

<form action="{{ route('inicial.buscarMedicamento.search')}}" method="post">	

    <div class="  texto ">
        <h1>Buscar medicamentos</h1>	
    </div>	

    <img class="image" src="/img/medicamentos.jpg"/>
    
    <div class="divisor">
        <h4 style="font-weight: bold"> Todos os medicamentos cadastrados esta disponivel na tabela abaixo: </h4>
    <p>Medicamento é o produto farmacêutico, tecnicamente obtido ou elaborado com finalidade profilática, curativa, paliativa ou para fins de diagnóstico.</p>
    <p> A definição legal deixa claro o papel fundamental desse produto, que previne doenças, mantém e recupera a saúde e alivia sintomas. Por isso o Idec entende que medicamentos não podem ser vistos como bens comuns, de uso ordinário, e sim como produtos essenciais. </p> 
    </div>

    <div class="form-inline  ajuste">
        @csrf
        <input style="margin-right: 3%; width:30%; border-radius: 10px; " name="search" type="text" placeholder="Digite o codigo do Medicamento " >
        <button  style="border-radius: 10px;" class="btn btn-success my-2 my-sm-0" type="submit">Procurar por Medicamento</button>
    </div>

        
    <div class="card-body">
    
    
    @if(count($medicamentos) > 0)				
        <table  class= "tabela">
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
                    <a href="/cadastros/medicamento/apagar/{{$medicamento->idmedicamento}}" class="btn btn-danger" 
                        onclick="return confirm('Deseja realmente apagar o medicamento ?');" role="button"> Apagar</a>
                    </td>	
                </tr>

    

                        @endforeach

                    </tbody>
                </table>
                @endif

                <div class="card-footer">
                    <a href="/cadastros/medicamento" class="btn btn-success" role="button"> Adicionar novo medicamento</a>
                    <a href="#" download="tabela.xls" class="btn btn-dark" role="button">Baixar Arquivo em XLS (Excel)</a>
                </div>

        </div>

        @if (isset($filters))
            <div class="pagina">
                        {{ $medicamentos->appends($filters)->links() }}
                    
            @else   
                {{ $medicamentos->links() }}
            @endif
        </div>


    
    
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</form>		
	  
@endsection
