<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Equipos en venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            @if (Auth::check())
           {{-- <a class="navbar-brand text-white" href=""><img style="border-radius: 22px; width:48px; height:48px;" src="{{storage::disk('public')->url(Auth::user()->foto ? Auth::user()->foto : 'images/usuarios/default.png')}}">{{Auth::user()->nombre_usuario}}</a>--}}
            @endif
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                @if (Auth::check())
                    <ul class="mb-2 navbar-nav me-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="text-white nav-link active" aria-current="page" href="">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link" href="{{route('equipos.index')}}">Equipos</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link" href="{{route('usuarios.index')}}">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link" href="{{route('ventas.index')}}">Ventas</a>
                        </li>

                        <div style="margin-left: 750px">
                            @livewire('login.logout')
                        </div>
                    </ul>
                @endif


            </div>
        </div>
    </nav>

      <div class="container">
        {{$slot}}
      </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @livewireScripts

    <script>
        livewire.on('alerta', mensaje=>{
            Swal.fire({
                icon: 'error',
                title: 'Ocurrio un error',
                text: mensaje
            })
        })

        livewire.on('alerta-crear', mensaje=>{
            Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: mensaje,
            showConfirmButton: false,
            timer: 1500
            })
        })

        livewire.on('alerta-editar', mensaje=>{
            Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: mensaje,
            showConfirmButton: false,
            timer: 1500
            })
        })
    </script>
</body>
</html>
