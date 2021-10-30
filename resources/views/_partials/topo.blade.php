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
          <a class="nav-link" href="{{route('site.sobre')}}">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('site.unidade')}}">Unidade</a>
        </li>
        <li class="nav-item">
          <!-- Click on Modal Button -->
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal" href="">Login</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>


  <!-- Modal -->
<div class="modal fade log" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content mod-login">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Logar para uso do Sistema</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action={{ route('site.login') }} method="post">
                @csrf
                  <div class="mb-3">
                      <label class="form-label">E-mail</label><i class="bi bi-at"></i>
                      <input type="text" class="form-control" id="usuario" value="{{ old('usuario') }}" name="usuario" placeholder="E-mail" />
                      {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}
                  </div>
                  <div class="mb-3">
                      <label class="form-label"></i>Senha</label><i class="bi bi-file-lock">
                      <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" />
                      {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                  </div>
                  <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="rememberMe" />
                      <label class="form-check-label" for="rememberMe">Lembrar</label>
                  </div>
                  <div class="modal-footer d-block">
                      <p class="float-start">Esqueci a senha <a href="#">Recuperar</a></p>
                      <button type="submit" class="btn btn-warning float-end">Logar</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
