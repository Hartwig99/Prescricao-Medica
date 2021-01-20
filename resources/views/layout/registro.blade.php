<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>- Registro de Usuario - Prescrição Medica</title>
        <link href="{{ asset('css/app.css')}}"  rel="stylesheet">
        <link href="{{ asset('css/registro.css')}}"  rel="stylesheet">
        <link rel="apple-touch-icon" sizes="57x57" href="/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#111352">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#111352">
    </head>

    <body class="bg-gradient-primary">
      <form  method="POST" action="{{ route('register') }}">
        <div class="container">
      
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                
                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center">
                      <img src="/img/registro.jpg"/>
                      <h1>Registre sua Conta !</h1>
                      
                    </div>
                    <form class="user">
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nome">Nome Completo</label>
                          <input type="text" class="form-control form-control-user" id="nome" placeholder="Nome Completo">
                        </div>
            
                        @yield('cpf')
                        
                      </div>
                     
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <label for="senha">Senha</label>
                          <input type="password" class="form-control form-control-user" id="senha" placeholder="Senha">
                          <small id="passwordHelpInline" class="text-muted">
                            Deve ter entre 8 e 20 caracteres.
                          </small>
                        </div>
                        <div class="col-sm-6">
                            <label for="senha">Confirmar Senha</label>
                          <input type="password" class="form-control form-control-user" id="confirmar_senha" placeholder="Confirmar Senha">
                        </div>
                      </div>
                    
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="data">Data de Nascimento</label>
                      <input type="date" class="form-control form-control-user" id="data" placeholder="00/00/0000">
                    </div>

                    </div>
                    <center>
                      <a href="login.html" class="btn btn-success btn-user ">  Registrar Conta </a>
                    </center>
                    </form>
                    <hr>
                    <div class="text-center">
                      <a class="small" href="forgot-password.html">Esqueceu a Senha?</a>
                    </div>
                    <div class="text-center">
                      <a class="small" href="/inicial/login">Ja possui uma Conta? Realize seu Login!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
        </div>
      </form>
     </body>
</html>            
