<div wire:init="cargando">
    <div class="mt-5">
        <x-alert>
            <x-slot name="contenido">
                Si tu equipo no se encuentra, procede a registrarlo presionando el boton "Crear nuevo".
            </x-slot>
        </x-alert>

        <div class="float-right mb-2">
            <a href="{{route("equipos.create")}}" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> nuevo</a>
        </div>

        <div class="mb-2 col-3">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..." aria-label="Username"
                    aria-describedby="addon-wrapping">
            </div>
        </div>

        @if (count($equipos) > 0)
        <table class="table table-dark text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th>Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Pais</th>
                    <th scope="col">No. jugadores</th>
                    <th scope="col">Estadio</th>
                    <th scope="col">Valor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipos as $equipo)
                    <tr>
                        <th scope="row">{{$equipo->id}}</th>
                        <th>
                            <img style="width: 50px;height:50px;"
                                src="{{ Storage::disk('public')->url($equipo->foto != null ? $equipo->foto : 'images/equipos/default.png') }}"
                                alt="">
                        </th>
                        <td>{{$equipo->nombre}}</td>
                        <td>{{$equipo->pais}}</td>
                        <td>{{$equipo->jugadores}}</td>
                        <td>{{$equipo->estadio}}</td>
                        <td>{{$equipo->valor}}</td>
                        <td>
                            <a href="{{ route('equipos.read', $equipo) }}" title="Mostrar más" type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('equipos.edit', $equipo) }}" title="Editar equipo" type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> </a>
                            <a href="{{ route('equipos.delete', $equipo) }}"title="Eliminar equipo" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>




                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

        @else
        <img class="mx-auto d-block" style="width:350px;height:350px;"
            src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">
        @endif

        {{$cargado == true ? $equipos->links() : null }}

    </div>

</div>
