@extends('layout.cabecalho')

@section('conteudo') 

<link href="{{ asset('css/medicamento.css')}}"  rel="stylesheet">



<form class="ajustes" action="/cadastros/medicamento" method="Post">
   
       
    @csrf

        <div class=" form-row texto ">
           
            <h4>Listas de preços de medicamentos</h4>

            <img  src="/img/simpro.jpg"/><br>

            <p>Para melhor atender ao cidadão que deseja consultar o preço máximo em que pode adquirir medicamentos nas farmácias e drogarias, 
                a Lista de Preços de Medicamentos da CMED alterou o seu formato. A partir de agora os medicamentos estão ordenados por princípio ativo, 
                forma farmacêutica e concentração, assim como a Lista para Compras Públicas, tornando mais fácil a consulta e a comparação de preços.</p>
                
                <a href="https://www.simpro.com.br/Default.aspx" class="btn btn-success"> Para mais informacoes! Acessar Site Simpro</a>
            </div> 

            <h1> Cadastro Medicamento<img class="image" src="/img/cadastro.png"/></h1> 
        
            <div class="form-row bg-success " >

                <div class="form-group col-md-6">
                    <label for="idmedicamento">Codigo</label>
                    <input type="text" class="form-control" name="idmedicamento" id="idmedicamento">
                </div>

                <div class="form-group col-md-6">
                    <label for="nome_medicamento">Nome do Medicamento</label>
                    <input type="text" class="form-control" name="nome_medicamento" id="nome_medicamento">
                </div>
                
                <div class="col-md-6 mb-6 ">
                    <label for="unidade">Unidade</label>
                    <select class="custom-select " name="unidade" id="unidade" required>
                      <option selected disabled value="">Selecione...</option>
                      <option>...</option>
                    </select>
                  </div>
            
            
                <div class=" form-group col-md-10 mb-10 divisor ">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" name="descricao" id="descricao" >
                </div>

                <div class=" form-group col-md-6 mb-6 divisor">
                    <label for="quantidade">Quantidade</label>
                    <input type="int" class="form-control" name="quantidade" id="quantidade">
                </div>

                <div class="form-group col-md-6 divisor">
                    <label for="valor">Preço em R$ </label>
                    <input type="double" class="form-control" name="valor" id="valor">
                </div>
            
            </div>
                <button type="submit" class="btn btn-success botao">Cadastrar <img class="adicionar" src="/img/adicionar.png"/></button>
                
</form>

                

@endsection 