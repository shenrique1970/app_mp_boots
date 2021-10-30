@extends('layouts.controle_template')

@section('title', 'Administração')

@section('content')
    <div class="container"> 
      
        <div class="row">
            <div class="col">
                <h4 class=""> Área da Administração</h4>       
            </div>
        </div>

        <div class="row">  
          <!--Controle turmas-->
          <div class="col-md-6">
            <div class="caixa">
                <span class="">
                    <i class="material-icons">recent_actors</i></i>
                    <h2>Turmas</h2>
                </span>
                <p>
                    Cada usuário que logar. terá acesso restrito
                    e designado para cada tipo de função ou 
                    necessidade específica.  
                </p>
                <div class="">
                    <a href="{{route('adm.turma')}}">Entrar...</a>
                </div>
              </div>
            </div>

            <!--Controle usuarios-->
            <div class="col-md-6">
              <div class="caixa">
                  <span class="">
                    <i class="material-icons">account_circle</i>
                    <h2>Usuários</h2>
                </span>
                <p>O sistema deve manter os dados dos usuários,
                    possibilitando a inclusão, alteração, exclusão 
                    e consulta dos mesmos. Somente o administrador 
                    terá o controle.
                  </p>
                  <div class="">
                      <a href="{{route('adm.usuario')}}" id="2">Entrar...</a>
                  </div>
              </div>
            </div>
       
          
        <div class="row align-items-md-stretch">
          <!--Controle alunos-->
          <div class="col-md-6">
            <div class="caixa">
                <span class="">
                    <i class="material-icons">face</i>
                    <h2>Alunos</h2> 
                </span>
                <p>
                    O sistema deve manter os dados dos alunos,
                    possibilitando a inclusão, alteração,
                    exclusão e consulta dos mesmos.
                </p>
                <div class="">
                    <a href="{{route('adm.aluno')}}">Entrar...</a>
                </div>
            </div>
          </div>

          <!--Controle responsaveis-->
          <div class="col-md-6">
            <div class="caixa">
                <span class="">
                    <i class="material-icons">supervisor_account</i>
                    <h2>Responsáveis</h2> 
                </span>
                <p>
                    O sistema deve manter os dados dos responsáveis,
                    possibilitando a inclusão, alteração, 
                    exclusão e consulta dos mesmos.
                </p>
                <div class="">
                    <a href="{{route('adm.responsavel')}}">Entrar...</a>
                </div>
            </div>
          </div>
          
        <div class="row align-items-md-stretch">
            <!--Controle recepcionistas-->
            <div class="col-md-6">
              <div class="caixa">
                <span class="">
                    <i class="material-icons">admin_panel_settings</i>
                    <h2>Recepcionistas</h2>
                </span>
                <p>
                    Os horários serão um limitador da entrada 
                    e permanência dos alunos na escola. 
                </p>
                <div class="">
                    <a href="{{route('adm.recepcao')}}">Entrar...</a>
                </div>
              </div>
            </div>
            
  
            <!--Controle restricao-->
            <div class="col-md-6">
              <div class="caixa">
                <span class="">
                    <i class="material-icons">pan_tool</i>
                    <h2>Restrições</h2>
                </span>
                <p>
                    O sistema deve manter os dados das restrições,
                    possibilitando a inclusão, alteração, 
                    exclusão e consulta dos mesmos.
                </p>
                <div class="">
                    <a href="{{route('adm.restricao')}}">Entrar...</a>
                </div>
              </div>
            </div>
        
          <div class="row align-items-md-stretch">
            <!--Controle-->
            <div class="col-md-6">
              <div class="caixa">
                  <span class="">
                    <i class="material-icons">notifications</i>
                     <h2>Avisos</h2>
                </span>
                <p>
                    O sistema deve manter os dados dos avisos,
                    possibilitando o envio, recebimento,
                    exclusão e consulta dos mesmos,
                    por parte dos envolvidos.
                </p>
                <div class="">
                    <a href="{{route('adm.aviso')}}">Entrar...</a>
                </div>
              </div>
            </div>
  
            <!--Controle-->
            <div class="col-md-6">
              <div class="caixa">
                  <span class="">
                    <i class="material-icons">sync_alt</i>
                    <h2>Entrada e saida</h2>
                </span>
                <p>
                    O controle de entrada e saída será feito 
                    pelo sistema analisando os horários 
                    respectivos dos alunos através da leitura 
                    do código das carteirinhas dos mesmos, 
                    assim permitindo ou não sua entrada.
                </p>
                <div class="">
                    <a href="{{route('adm.entrada')}}">Entrar...</a>
                </div>
              </div>
            </div>
            
          <div class="row align-items-md-stretch">
            <!--Controle-->
            <div class="col-md-6">
              <div class="caixa">
                  <span class="">
                    <i class="material-icons">query_builder</i>
                    <h2>Horarios</h2>
                </span>
                <p>
                    Os horários serão um limitador da entrada 
                    e permanência dos alunos na escola. 
                </p>
                <div class="">
                    <a href="{{route('adm.horario')}}">Entrar...</a>
                </div>
              </div>
            </div>
  
            <!--Controle-->
            <div class="col-md-6">
              <div class="caixa">
                  <span class="">
                    <i class="material-icons">tour</i>
                    <h2>Visitantes</h2>
                </span>
                <p>
                    O sistema deve manter os dados dos visitantes,
                    possibilitando a inclusão, alteração, exclusão e
                    consulta dos mesmos.
                    Os visitantes terão seu acesso permitido a 
                    escola no entanto não necessitarão fazer o login,
                    sua entrada bem como seus dados pessoais 
                    serão registrados somente para fins de controle e segurança.
                </p>
                <div class="">
                    <a href="{{route('adm.visitante')}}">Entrar...</a>
                </div>
            </div>
          </div>
    </div>
@endsection
