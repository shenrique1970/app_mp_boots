<!--Topo -->
<nav class="navbar navbar-expand-lg fixed-top topo" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('site.index')}}">
      <img class="logom" src="{{ asset('img/logomapa.png') }}" alt="Logo">
    </a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse offcanvas-collapse justify-content-end" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-link" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Sobre o sistema">Sobre</button>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-link" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Sobre a unidade Faetec">Unidade</button>
        </li>
        <div class="dropdown" id="fto">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('img/usuario1.jpeg') }}" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>{{$titulo}}</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('site.index')}}">Sair</a></li>
          </ul>
        </div>
      </div>
        
      </ul>
      
    </div>
  </div>
</nav>
