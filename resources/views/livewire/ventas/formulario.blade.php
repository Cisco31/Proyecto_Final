
<div class="mb-3">
    <label class="form-label">Usuario que adquiere el curso</label>
    <select wire:model="venta.id_usuario" class="form-select">
        @foreach ($usuarios as $usuario)
            <option value="{{$usuario->id}}">{{$usuario->nombre_usuario}}</option>
        @endforeach

    </select>
</div>
<div class="mb-3">
    <label class="form-label">Equipo</label>
    <select wire:model="venta.id_equipo" class="form-select">
        @foreach ($equipos as $equipo)
            <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
        @endforeach

    </select>
</div>


