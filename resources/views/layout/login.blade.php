<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>- Login Prescrição Medica</title>
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
  <link href="{{ asset('css/login.css')}}"  rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            
            <div class="row">
              <div class="col-lg-12">
                
                <div class="p-5">
                  <div class="text-center">
                    <img src="/img/login.png"/>
                    <h1>Bem vindo a Prescrição Medica Eletronica </h1>
                  </div>
                  
                  {{-- action="{{route('admin.login.do')}} --}}
                  <form class="user" method="POST" action="{{route ('inicial.login')}}">
                    @csrf
                    <div class="form-group">
                      <label for="email">Endereço de E-mail</label>
                      <input type="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Por Favor informe seu email ...">
                    </div>

                    <div class="form-group">
                      <label for="password">Senha</label>
                      <input type="password" class="form-control form-control-user" id="password" placeholder="Informe sua Senha ...">
                    </div>

                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="lembrar">
                        <label class="custom-control-label" for="customCheck">Lembrar senha</label>
                      </div>
                    </div>
                    
                    <center><a href="index.html" class="btn btn-success btn-user botao ">Login</a></center>

                    <div class="text-center">
                      <a class="small" href="forgot-password.html">Esqueceu a senha</a>
                    </div>

                  <div class="text-center">
                    <h4>Ainda não possui cadastro? </h4>
                    <a class="small" href="/inicial/registro">Criar uma Conta</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" ></script>

  <script>
        $(function(){
          alert('teste');
        });
  </script>
  

</body>

</html>
