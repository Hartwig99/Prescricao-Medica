@extends('layout.cabecalho')

@section('conteudo') 
<link href="{{ asset('css/material.css')}}"  rel="stylesheet">




<form class="ajustes" action="/cadastros/material" method="Post">

   @csrf
    
    <div class=" form-row texto ">
        <h3>Listas de Materiais Descartáveis</h3>

        <img class="image-material" src="/img/material.jpg"/>

        
            <div class="w3-border-bottom">
                <p style="margin-top: 5%">Para melhor atender ao cidadão que deseja consultar o preço máximo em que pode adquirir medicamentos nas farmácias e drogarias, 
                    a Lista de Preços de Medicamentos da CMED alterou o seu formato. A partir de agora os medicamentos estão ordenados por princípio ativo, 
                    forma farmacêutica e concentração, assim como a Lista para Compras Públicas, tornando mais fácil a consulta e a comparação de preços.</p>
                </div>
            <a href="https://www.simpro.com.br/Default.aspx" class="btn btn-success"> Para mais informações! Acessar Site Simpro</a>
    </div> 

        <h1 style="display:flex; float: left; text-align: center "><img  class="image" src="/img/cadastro.png"/> Cadastro de Material </h1>
        <div class="form-row bg-success cadastro">

            <div class="form-group col-md-6">
                <label for="idmaterial">Código</label>
                <input type="text" class="form-control" name="idmaterial" id="idmaterial">
            </div>

                <div class="form-group col-md-6">
                    <label for="nome_material">Nome do Material</label>
                    <input type="text" class="form-control" name="nome_material" id="nome_material">
                </div>
                <div class="col-md-6 mb-6 divisor">
                    <label for="unidade">Unidade</label>
                    <select class="custom-select "  name="unidade" id="unidade" required>
                      <option selected disabled value="">Selecione...</option>
                      <option>...</option>
                    </select>
                  </div>
 
            <div class="form-group col-md-10 md-10 divisor">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao" >
            </div>

                <div class="form-group col-md-6 divisor">
                    <label for="quantidade">Quantidade</label>
                    <input type="int" class="form-control" name="quantidade" id="quantidade">
                </div>

                <div class="form-group col-md-6 divisor">
                    <label for="valor">Preço em R$ </label>
                    <input type="double" class="form-control" name="valor" id="valor">
                </div>
            
                <button type="submit" class="btn  botao" onclick="return confirm('Deseja realmente cadastrar o material ?');">Cadastrar <img class="adicionar" src="/img/adicionar.png"/></button>
            </div>
            

            
                

            

                    
                
            
    

</form>

@endsection 
