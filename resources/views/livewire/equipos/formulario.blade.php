<div class="row">
    <div class="col-4">

        <div wire:loading wire:target="foto" class="align-items-center">
            <strong>Cargando...</strong>
            <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
        </div>

        @if ($foto != null)
            <img style="width: 230px;height:230px;" src="{{ $foto->temporaryUrl() }}" alt="">
        @else
            <img style="width: 230px;height:230px;"
                src="{{ Storage::disk('public')->url($equipo->foto != null ? $equipo->foto : 'images/equipos/default.png') }}"
                alt="">
        @endif



        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">seleccionen la imagen</label>
                <input wire:model="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                @error('foto') <span class="text-danger">{{ $message }}</span>@enderror

            </div>
        </form>
    </div>

    <div class="col-6 mx-auto">
            <h1>Registro de Equipos</h1>
            <div class="form-group ">
                <label>Nombre</label>
                <input wire:model.defer="equipo.nombre" type="text" class="form-control">
                @error('equipo.nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group ">
                <label>Pais</label>
                <input wire:model.defer="equipo.pais" type="text" class="form-control">
                @error('equipo.pais')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group ">
                <label>No. de Jugadores</label>
                <input wire:model="equipo.jugadores" type="text" class="form-control">
                @error('equipo.jugadores')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <span>{{$equipo->jugadores >=26 ? 'Excede el limite de jugadores' : 'Dentro del limite de jugadores'}}</span>
            </div>
            <div class="form-group ">
                <label>Estadio</label>
                <input wire:model.defer="equipo.estadio" type="text" class="form-control">
                @error('equipo.estadio')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group ">
                <label>Valor</label>
                <input wire:model.defer="equipo.valor" type="text" class="form-control">
                @error('equipo.valor')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

    </div>
</div>
