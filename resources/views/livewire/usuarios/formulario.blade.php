<div class="row">
    <div class="col-4">

        <div wire:loading wire:target="foto" class="align-items-center">
            <strong>Cargando...</strong>
            <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
        </div>

        @if ($foto != null)
            <img style="width: 230px;height:230px;" src="{{ $foto->temporaryUrl() }}" alt="">
        @else
            <img style="border-radius:120px; width: 230px;height:230px;"
                src="{{ Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/usuarios/default.png') }}"
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
            <h1>Registro de Usuarios</h1>
            <div class="form-group ">
                <label>Nombre de Usuario</label>
                <input wire:model.defer="usuario.nombre_usuario" type="text" class="form-control">
                @error('usuario.nombre_usuario')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group ">
                <label>Email</label>
                <input wire:model.defer="usuario.email" type="email" class="form-control">
                @error('usuario.email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group ">
                <label>Password</label>
                <input wire:model="password" type="password" class="form-control">
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group ">
                <label>Confirmar Password</label>
                <input wire:model="confirmar_password" type="password" class="form-control">
                @error('confirmar_password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
    </div>
</div>
