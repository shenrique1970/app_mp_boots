<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
        <link rel="stylesheet" href="{{ asset('css/topoadm.css') }}">
        <title>@yield('title') </title>
    </head>
    <body class="teal lighten-4">
        <header>
            @include('_partials.topo_usu')
            {{--@include('_partials.dropdowncontroles')
            @include('_partials.dropdownconta')
            @include('_partials.menumobile')--}}
        </header>
        <div class="container-fluid pb-3">
            <div class="d-grid gap-2" style="grid-template-columns: 1fr 2fr;">
              <div class="bg-light border rounded-3">
                notifications
                <br><br><br><br><br><br><br><br><br><br>
              </div>
              <div class="bg-light border rounded-3">
                @yield('usu') 
              </div>
            </div>
        </div>   
            
        <!--RODAPÉ-->
        <footer>
            @include('_partials.footer')
        </footer>
        <!--JavaScript at end of body for optimized loading-->    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="{{ asset('js/home.js')}}"></script>
        <script src="{{ asset('js/home.js')}}"></script>
        <script src="{{ asset('js/crud.js')}}"></script>
        <script src="{{ asset('js/temusuario.js')}}"></script>
        <script src="{{ asset('js/iniciar.js')}}"></script>
    </body>
</html>