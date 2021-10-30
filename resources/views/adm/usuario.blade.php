@extends('layouts.app_template')

@section('title', 'Usuário')

@section('conteudo')
    <form id="row g-3" method="POST" action="">
        @csrf
        
        <h4>Dados Pessoais</h4>
        <input type="hidden" name="id" value="" />
            <!--linha-->
            <div class="row">
                <div class="col-md-6">
                    <label type="form-label" for="cpf">CPF (11 DIGITOS)</label>
                    <input class="form-control" id="cpf" type="text" name="cpf" class="validate">
                </div>
            </div>
            <!--linha-->
            <div class="row">
                <!--coluna-->
                <div class="col-md-6">
                    <label type="form-label" for="nome">Nome</label>
                    <input id="nome" type="text" name="nome" class="form-control validate">
                </div>
                <!--coluna-->
                <div class="col-md-1">
                    <label for="sexo" type="form-label" >Sexo</label>
                    <input id="sexo" type="text" name="sexo" class="form-control validate">
                </div>
                <div class="col-md-4">
                    <label for="nascimento" type="form-label">Data de nascimento</label>
                    <input id="nascimento" type="date" name="nascimento" class="form-control validate">
                </div>
            </div>
            
            <div class="row">
                <!--coluna-->
                <div class="col-md-4">
                    <label for="tel1" type="form-label">Telefefone 1 (Obrigatório)</label>
                    <input id="tel1" type="text" name="tel1" class="form-control validate">
                </div>
                <!--coluna-->
                <div class="col-md-4">
                    <label for="te2" type="form-label">Telefone 2</label>
                    <input id="tel2" type="text" name="tel2" class="form-control validate">
                </div>
            </div>
            <!--linha-->
            <div class="row">
                <div class="col-md-10">
                    <label for="endereco" type="form-label">Endereço completo</label>
                    <input id="endereco" type="text" name="endereco" class="form-control validate">
                </div>
            </div>
            <!--linha-->
            <div class="row">
                <div class="col-md-10">
                    <label for="necessidade" type="form-label">Necessidades especiais</label>
                    <input id="necessidade" type="text" name="especial" class="form-control validate">
                </div>
            </div>
            <h4>Usuário Tipo</h4>
        <input type="hidden" name="id" value="" />
        <div class="col-md-4">
            <select name="tipo" class="form-select form-select-lg mb-3 center" aria-label=".form-select-lg example">
                <option value=""></option>
                <option selected>Escolha sua opção</option>
                <option value="adm">Administrador</option>
                <option value="alu">Aluno</option>
                <option value="res">Responsável</option>
                <option value="rec">Recepcionista</option>
            </select>
            
        </div>
       
        <div class="row">
            <div class="col-md-6">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input id="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
                <label for="inputPassword" class="form-label">Senha</label>
                <div class="col-sm-10">
                  <input id="senha" type="password" class="form-control" id="inputPassword">
                </div>
              </div>
            
        </div>
       
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto</label>
                    <input id="foto" class="form-control" type="file" id="formFile">
                  </div>
            </div>
        </div>
        <!--linha-->
        <div class="row">
            <div class="input-field col s3">
                <span>Não Sim</span>
                <div class="form-check form-switch">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Ativo</label>
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault ativo">
                  </div>
                </div>
            </div>
        </div>     
    </form>
@endsection