@extends('layout.cabecalho')

@section('conteudo')    

<link href="{{ asset('css/index.css')}}"  rel="stylesheet">

           
        <div class="ajustes  ">
          <h1 >Faça sua Prescrições Medicas Eletronicamente</h1>

          <img class="img-fluid px-3 px-sm-5 mt-4 mb-6" style="width: 40rem;" src="img/prescricao.jpg" alt="">

          <h3> O que é uma Prescrição Medica ?</h3>
          <br>
          <p>
          Uma prescrição é uma rotina de cuidados com a saúde, implementadas por um médico ou outro profissional de saúde qualificado, voltadas para um paciente em específico. O termo geralmente se refere à 
          autorização por escrito de um médico para um paciente comprar um medicamento de um farmacêutico.</p>
          <a target="_blank" rel="nofollow" href="https://undraw.co/">Verifique o manual do nosso site ou qualquer coisa entre em contato &rarr;</a>
        </div>
        
        <div class="ajustes2  ">

          <h2>SAÙDE EM DIA</h2>

          <img  class="img-fluid px-2 px-sm-4 mt-3 mb-5"style="width: 40rem;" src="img/saude.png" alt="">
          <br>
          <br>
          <h3> O que fazer para manter a saúde em dia ?</h3>
          <br>
          <p>
            Ter uma boa saúde é requisito essencial para uma vida saudável e alegre.
             A saúde traz vigor, disposição e bem-estar na rotina de uma pessoa, além de garantir mais anos de vida. 
             Então, acompanhe as próximas dicas que farão você manter a sua saúde em dia, 
             para aproveitar os melhores momentos ao lado de si mesmo e da sua família. Confira!.</p>

             <a href="#" class="btn btn-success">Acessar Site</a>
        </div>

        <div class="row">
                <div class="col-sm-6">
          
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"> Beneficios da prescrição eletronica.</h5>
                      <p class="card-text">Esse instrumento tem se popularizado em diversos países, substituindo o receituário de papel.</p>
                      <a href="#" class="btn btn-success">Realizar prescricao</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Tipos de Exames</h5>
                      <p class="card-text">Conheca os tipos de prescricao para cada exames.</p>
                      <a href="#" class="btn btn-success">Ver Exames</a>
                    </div>
                  </div>
                </div>
              </div>

        
        
@endsection 

