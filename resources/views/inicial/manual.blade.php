
@extends('layout.cabecalho')

@section('conteudo')
<link href="{{ asset('css/manual.css')}}"  rel="stylesheet">
<link href="{{ asset('css/cabecalho.css')}}"  rel="stylesheet">


<form>
<div class="texto">
    <div >
        <h1> Manual de utilização </h1>
        <span class="vc_empty_space_inner">
            <br>
            <p>Por meio da tela de login o usuário pode entrar no sistema para que suas ações e operações no sistema sejam registradas no seu nome,
                 além de possibilitar o usuário alterar a sua senha ou criar uma conta.</p>
            <p>Ao  usuário realizar seu cadastro, ele é redirecionado à página inicial do sistema, 
                onde ele tem algumas informações iniciais intuitivas, podendo acessar links que redirecionam para os sites onde ele poderá ler mais sobre o tópico escolhido.  </p>
           
            <p>Além disso o sistema disponibiliza uma barra de tarefas, onde ele poderá fazer contato com a empresa, ver informações sobre o site e realizar 
                configurações para que possa ser mais produtivo ou até mesmo relatar problemas ocorrentes na ferramenta. 
                A página inicial disponibiliza um menu de fácil acesso ao ser clicado nos 3 traços da representação do menu, 
                no qual ele disponibiliza diversas outras opções que será comentado nas outras telas.</p>   
                <br>  
            <h4> Telas de Buscas</h4>
            <br>    
            <p>Tela de buscar material e medicamentos possui os campos exatos para as informações necessárias sobre a informação do produto e seu valor, no qual o usuário possui dois campos, podendo assim realizar a edição ou até mesmo a exclusão do material.
                Quando realizado o Cadastro automaticamente ele já será inserido na tabela com suas informações para poder adicionar o produto utilizado na prescrição.
                 Possui um campo para verificar as listas de materiais que são descartáveis ajudando o usuário ter uma informação ainda melhor sobre os produtos.</p>
                 <br>  
            <h4> Tela de Prescrição Médica </h4>     
            <br>   
            <p> Já na tela de Realizar Prescrição Médica é possível o profissional adicionar todos as informações necessárias sobre o que foi utilizado na realização do exame, além de conter os dados dos medicamentos e materiais que foram utilizados. 
                Possui campos para inserir dados do paciente, convênio, data de realização do exame, observação no qual é inserido , como foi realizado o exame e o que foi utilizado, entre outras informações necessárias que o profissional precisa adicionar. </p>

            <p> Esta possui 3 botões que o usuário pode utilizar para adicionar a quantidade certa de medicamentos e materiais que foram utilizados no exame, fazendo uma busca geral na base de dados. </p>    
            <a href="/doc/manual.docx" target='_blank' 
            title="Clique aqui para abrir um documento do Word">
            Clique aqui para abrir o Manual Completo do Sistema </a>

        </div>        
    </form> 

    @endsection