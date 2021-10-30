@extends('layouts.site_template')

@section('title', 'Unidade')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <span class="text-center"> FAETEC - Unidade Volta Redonda </span>
            <p>A Unidade da FAETEC ETE - Amaury Cesar Vieira localiza-se na Rua 1015, s/n, Volta Grande II, Volta Redonda/RJ, é
            composta de 4 prédios. contém um quadro de Funcionários sendo de Diretores, secretaria geral, Pedagogos, Auxiliares
            e Professores. Possui um estacionamento que tem capacidade para 15 carros, onde os funcionários podem guardar
            seus carros durante seu horário de trabalho.</p>   
            <div class="text-center">
                <img src="{{ asset('img/foto1.jpg')}}" class="rounded mx-auto d-block foto">                        
                <span class=""> Conheça estrutura da ETE - Amaury César Vieira </span>  
            </div>          
        </div>
        <div class="row">         
            <div class="text-center">
                <span class=""> SECRETÁRIA </span>
                <img src="img/faetec2.jpg" class="rounded mx-auto d-block foto">
                <p>
                    É o setor da escola responsável pelos serviços de secretaria que realiza todas as funções destinadas a manter os
                    registros, os arquivos de documentação dos alunos e dos funcionários, além de comunicados e expedições para apoiar o
                    desenvolvimento do processo escolar, dando valor legal a toda documentação expedida com aval do secretário
                    responsável e da direção escolar.
                </p>                       
            </div>            
        </div>   
        <div class="row">   
            <div class="text-center">
                <span class=""> INFORMÁTICA </span>
                <img src="img/labinfo.jpg" class="rounded mx-auto d-block foto"> 
                <p>
                    Contém 6 laboratórios de Informática, sendo eles: Redes, montagem de manutenção e 4 com 20 computadores,
                    com capacidade para 40 alunos, sendo 2 em cada mesa.
                </p>                        
            </div>                 
        </div>
        <div class="row">
            <div class="text-center">
                <span class="text-center"> BIBLIOTECA </span>
                <img src="img/biblioteca.jpg" class="rounded mx-auto d-block foto"> 
                <p>Possui uma biblioteca com grande acervo de livros para auxiliar os alunos em seus estudos</p>                
            </div>                         
        </div>
        <div class="row">     
            <div class="text-center">
                <span class="card-title center-align"> AUDITÓRIO </span>
                <img src="img/auditorio.jpg" class="rounded mx-auto d-block foto"> 
                <p>Auditório com capacidade para mais de 50 pessoas.</p>        
            </div>                     
        </div>  
        <div class="row">                
            <div class="text-center">
                <span class=""> MULTIMIDIA </span> 
                <img src="img/Saladevideo.jpg" class="rounded mx-auto d-block foto">
                <p>Sala multimidia para videos aulas.</p>         
            </div>
        </div>    
        <div class="row">     
            <div class="text-center">
                <span class=""> ESPAÇO DAS ARTES </span>
                <img src="img/artes.jpg" class="rounded mx-auto d-block foto">
                <p>No prédio 3 fica localizada a sala de artes, onde o mesmo também é usado para os cursos FIC.</p>                             
            </div>                 
        </div>
        <div class="row"> 
            <div class="card" style="background: #b2dfdb">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="text-left">
                        <h5 class="card-title"><span class=""> ENSINO MÉDIO </span></h5>
                        <img src="img/faetec5.jpg" class="rounded mx-auto d-block foto" alt="...">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-body">
                      <p class="">O Prédio 4 é do Ensino Médio, onde são realizados os 
                          cursos técnicos de Administração.</p>
                    </div>
                  </div>
                </div>
            </div>                       
        </div>
    </div>
@endsection