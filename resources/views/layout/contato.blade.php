<!DOCTYPE HTML>
<html lang="pt-br">  
    <head>  
        <meta charset="utf-8">
        <link href="{{ asset('css/contato.css')}}"  rel="stylesheet">
        <link href="{{ asset('css/cabecalho.css')}}"  rel="stylesheet">
    </head>
    <body>
        
        <div class=" contact-form">
                    <div class="contact-image">
                        <img src="/img/contato.png" alt="img_contato"/>
                    </div>
                    <form method="post">
                        <h3> Precisando entrar em Contato, Deixe sua Mensagem! </h3>
                       <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="txtName" class="form-control" placeholder="Nome *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtEmail" class="form-control" placeholder="Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtPhone" class="form-control" placeholder="Telefone/Celular *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btnSubmit" class="btnContact" value="Enviar Contato" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="txtMsg" class="form-control" placeholder="Mensagem de Contato*" style="width: 100%; height: 150px;"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
        </div>

        @yield('conteudo')
 </body>
</html>
<!--Section: Contact v.2-->