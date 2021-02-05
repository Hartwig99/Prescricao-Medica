@extends('layout.cabecalho')


@section('conteudo') 
  <link href="{{ asset('css/cabecalho.css')}}"  rel="stylesheet">
  <link href="{{ asset('css/contato.css')}}"  rel="stylesheet">
<div class=" contact-form">
    <div class="contact-image">
        <img src="/img/contato.png" alt="img_contato"/>
    </div>
    <form  action="/inicial/contato/enviar" method="post"  id="mandaContato">
        @csrf
        <h3> Precisando entrar em Contato, Deixe sua Mensagem! </h3>
       <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="nome" class="form-control" placeholder="Nome *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="telefone" class="form-control" placeholder="Telefone/Celular *" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Enviar Contato" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="mensagem" class="form-control" placeholder="Mensagem de Contato*" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
