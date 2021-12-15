<div wire:init="cargando">
    <div class="mt-5">
        <x-alert>
            <x-slot name="contenido">
                Para crear una nueva venta presiona el boton "Crear nueva venta".
            </x-slot>
        </x-alert>

        <div class="float-right mb-2">
            <a href="{{route("ventas.create")}}" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> Crear nueva venta</a>
        </div>

        <div class="mb-2 col-3">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..." aria-label="Username"
                    aria-describedby="addon-wrapping">
            </div>
        </div>

        @if (count($ventas) > 0)
        <table class="table table-dark text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre de usuario</th>
                    <th scope="col">Equipo adquirido</th>
                    <th scope="col">Fecha de compra</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)
                    <tr>
                        <th scope="row">{{$venta->id}}</th>
                        <td>{{$venta->nombre_usuario}}</td>
                        <td>{{$venta->nombre}}</td>
                        <td>{{$venta->created_at}}</td>
                        <td>
                            <a href="{{ route('ventas.read', $venta) }}" title="Mostrar más" type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('ventas.edit', $venta) }}" title="Editar venta" type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> </a>
                            <a href="{{ route('ventas.delete', $venta) }}"title="Eliminar venta" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>




                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

        @else
        <img class="mx-auto d-block" style="width:350px;height:350px;"
            src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">
        @endif

        {{$cargado == true ? $ventas->links() : null }}

    </div>

</div>
