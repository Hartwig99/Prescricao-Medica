@extends('layout.cabecalho')



@section('conteudo')

<link href="{{ asset('css/cabecalho.css')}}"  rel="stylesheet">
<link href="{{ asset('css/buscarProduto.css')}}"  rel="stylesheet">

<form  action="{{ route('inicial.buscarMaterial.search')}}" method="post">	
    @csrf
    <div class="  texto ">
        <h1>Buscar por Materiais Cadastrados</h1>
    </div>	
    <img class="image" src="/img/material.jpg"/>

    <div class="divisor">
    <h4 style="font-weight: bold"> Todos os materiais cadastrados estão disponível na tabela abaixo: </h4>
    <br>
    <p>Os Materiais hospitalares descartáveis, também chamados de materiais de consumo hospitalar são aqueles itens usados no dia a dia de atendimentos médicos que não podem ser reutilizados e precisam ter os estoques reabastecidos periodicamente. Tratam-se de artigos fundamentais em qualquer tipo de procedimento e, por serem usados apenas uma vez, oferecem mais segurança aos pacientes, pois afasta o risco de contaminação.</p>
    <p>Não são apenas em hospitais que esses materiais se fazem necessários. Eles também devem estar presentes em postos de saúde, consultórios médicos, clínicas e em ambientes onde exista o risco de contaminação por material biológico, fungos, microorganismos e outros agentes nocivos.</p> 
    </div>

    <div class="form-inline  ajuste">
        
        <input style="margin-right: 3%; width:30%; border-radius: 10px; " name="search" type="text" placeholder="Digite o codigo do Material " >
        <button  style="border-radius: 10px;" class="btn btn-success my-2 my-sm-0" type="submit">Procurar por Material</button>
    </div>

    
    <div class="card-body  " >
        
        @if(count($materials) > 0)				
                <table  class= "tabela" style="border: 2px solid black " >
                    <thead>
                        <tr style="border: 2px solid black ">
                            <th >Codigo</th>
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
                            <br>
                            <a href="/cadastros/material/apagar/{{$material->idmaterial}}" class="btn btn-danger" role="button"
                                onclick="return confirm('Deseja realmente apagar o material ?');"> Apagar</a>
                            </td>	
                        </tr>

                        

                        @endforeach
            
                    </tbody>
                </table>
            @endif
   
                <!--
                        Funcao de filtras pesquisa
            //-->
            <div class="card-footer">
                @if (isset($filters))
                            {{ $materials->appends($filters)->links() }}	
                @else   
                    {{ $materials->links() }}
                @endif
            </div>

            <div >
                    <a href="/cadastros/material" class="btn btn-success" role="button"> Adicionar novo material</a>

                    <a href="#" download="tabela.xls" class="btn btn-dark" role="button">Baixar Arquivo em XLS (Excel)</a>
                </div>
       
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </div>
    
</form>		
	  
@endsection
