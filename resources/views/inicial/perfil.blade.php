
@extends('layout.cabecalho')

@section('conteudo')
<link href="{{ asset('css/perfil.css')}}"  rel="stylesheet">
<link href="{{ asset('css/cabecalho.css')}}"  rel="stylesheet">

<form class="texto">
    <div class="form-row">
        <div class="form-group col-md-10">
          <label for="inputEmail4"> Endereço de Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Senha</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Endereço</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Av. Brasil">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Complemento</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Perto do Mercado Mega">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Cidade</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Estado</label>
          <select id="inputState" class="form-control">
            <option selected>Selecione...</option>
            <option>Acre(AC)</option>
            <option>Alagoas(AL)</option>
            <option>Amapa(AP)</option>
            <option>Amaoznas(AM)</option>
            <option>Bahia(BA)</option>
            <option>Ceará(CE)</option>
            <option>Distrito Federal (DF)</option>
            <option>Espírito Santo (ES)</option>
            <option>Goiás (GO)</option>
            <option>Maranhão (MA)</option>
            <option>Mato Grosso (MT)</option>
            <option>Mato Grosso do Sul (MS)</option>
            <option>Minas Gerais (MG)</option>
            <option>Pará (PA)</option>
            <option>Paraíba (PB)</option>
            <option>Paraná (PR)</option>
            <option>Tocantins (TO)</option>
            <option>Sergipe (SE)</option>
            <option>São Paulo (SP)</option>
            <option>Santa Catarina (SC)</option>
            <option>Roraima (RR)</option>
            <option>Rio Grande do Sul (RS)</option>
            <option>Rio Grande do Norte (RN)</option>
            <option>Rio de Janeiro (RJ)</option>
            <option>Pernambuco (PE)</option>
            <option>Piauí (PI)</option>
           
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputZip">CEP</label>
          <input type="text" class="form-control" id="inputZip">
        </div>

        <div class="form-group col-md-4">
            <label for="inputZip">CRM</label>
            <input type="text" class="form-control"  placeholder="Opcional" >
          </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Dr.
          </label>
        </div>
          <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Dra.
          </label>
          </div>
          <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Gerente.
          </label>
          </div>
        
      </div>
      <button type="submit" class="btn btn-primary">Salvar</button>
</div>  

<div class="espaco2" >
        <div>
        <h2>Carregar Foto do Perfil </h2>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/img/ihb.ico" alt="Card image cap">
        </div>    
    <form>
        
        <br>
        <div class="form-group">
          <label for="exampleFormControlFile1">Escolha o arquivo png ou jpg</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
      </form>
</div>    

</form>

@endsection