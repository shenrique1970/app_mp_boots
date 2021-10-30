@extends('layouts.site_template')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="img/banner01.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="100%" fill="#777"/>
                  </div>
                  <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="img/banner03.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="100%" fill="#777"/>
                  </div>
                  <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="img/banner02.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="100%" fill="#777"/>
                  </div>
                  <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="img/banner04.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="100%" fill="#777"/>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div> 
        </div>
        

        <div class="row">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static cartao">
                    
                        <h3 class="mb-0">Sobre o sistema</h3>
                        
                        <p class="mb-auto cartao">SO projeto do mapa presencial tem o principal
                            fundamento controlar a entrada e saída dos
                            alunos na instituição, garantindo controle,
                            segurança dos mesmos e fornecendo melhores
                            informações para seus responsáveis.</p>
                        <a href="{{route('site.sobre')}}" class="stretched-link">Mais...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static cartao">
                    
                        <h3 class="mb-0">Amaury Cesar Vieira</h3>
                        
                        <p class="mb-auto">A Unidade da FAETEC ETE - Amaury Cesar Vieira
                            entá localiza na Rua 1015, s/n, Volta Grande II,
                            Volta Redonda/RJ. É composta de 4 prédios...
                            e oferece
                            diversos cursos de qualidade para jovens e adultos a população
                            de Volta Redonda.</p>
                        <a href="{{route('site.unidade')}}" class="stretched-link">Mais...</a>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
     
    
@endsection