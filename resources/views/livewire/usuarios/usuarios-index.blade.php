<div wire:init="cargando">
    <div class="mt-5">
        <x-alert>
            <x-slot name="contenido">
                Si no se encuentra el usuario, procede a registrarlo presionando el boton "Crear nuevo Usuario".
            </x-slot>
        </x-alert>

        <div class="float-right mb-2">
            <a href="{{route("usuarios.create")}}" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> Crear Nuevo Usuario</a>
        </div>

        <div class="mb-2 col-3">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..." aria-label="Username"
                    aria-describedby="addon-wrapping">
            </div>
        </div>

        @if (count($usuarios) > 0)
        <table class="table table-dark text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th>Imagen</th>
                    <th scope="col">Nombre de usuario</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{$usuario->id}}</th>
                        <th>
                            <img style="width: 50px;height:50px;"
                                src="{{ Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/usuarios/default.png') }}"
                                alt="">
                        </th>
                        <td>{{$usuario->nombre_usuario}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->password}}</td>
                        <td>
                            <a href="{{ route('usuarios.read', $usuario) }}" title="Mostrar más" type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('usuarios.edit', $usuario) }}" title="Editar usuario" type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> </a>
                            <a href="{{ route('usuarios.delete', $usuario) }}"title="Eliminar usuario" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>




                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

        @else
        <img class="mx-auto d-block" style="width:350px;height:350px;"
            src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">
        @endif

        {{$cargado == true ? $usuarios->links() : null }}

    </div>

</div>
