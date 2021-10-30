@extends('layouts.app_template')

@section('title', 'Visitante')

@section('conteudo')
    <form id="form-data" method="POST" action="">
        @csrf
        
            <h4>Dados do visitante</h4>
            <input type="hidden" name="id" value="" />
            <!--linha-->
            <div class="row">
                <div class="input-field col s6">
                    <input id="cpf" type="text" name="cpf" class="validate">
                    <label for="cpf">CPF (11 DIGITOS)</label>
                </div>
            </div>
            <!--linha-->
            <div class="row">
                <!--coluna-->
                <div class="input-field col s10">
                    <input id="nome" type="text" name="nome" class="validate">
                    <label for="nome">Nome</label>
                </div>
                <!--coluna-->
                <div class="input-field col s1">
                    <input id="sexo" type="text" name="sexo" class="validate">
                    <label for="sexo">Sexo</label>
                </div>
            </div>
            <!--linha-->
            <div class="row">
                <div class="input-field col s6">
                    <input id="nascimento" type="text" name="nascimento" class="validate">
                    <label for="nascimento">Data de nascimento</label>
                </div>
            </div>
            <!--linha-->
            <div class="row">
                <!--coluna-->
                <div class="input-field col s6">
                    <input id="tel1" type="text" name="tel1" class="validate">
                    <label for="tel1">Telfefone 1 (Obrigatório)</label>
                </div>
                <!--coluna-->
                <div class="input-field col s6">
                    <input id="tel2" type="text" name="tel2" class="validate">
                    <label for="te2">Telefone 2</label>
                </div>
            </div>
            <!--linha-->
            <div class="row">
                <div class="input-field col s12">
                    <input id="endereco" type="text" name="endereco" class="validate">
                    <label for="endereco">Endereço completo</label>
                </div>
            </div>
            <!--linha-->
            <div class="row">
                <div class="input-field col s12">
                    <input id="necessidade" type="text" name="especial" class="validate">
                    <label for="necessidade">Necessidades especiais</label>
                </div>
            </div>       
    </form>
@endsection