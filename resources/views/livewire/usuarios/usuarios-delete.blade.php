<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img style="width: 170px;height:170px;" class="mx-auto mt-3 card-img-top"
        src="{{ Storage::disk('public')->url($usuario->foto ? $usuario->foto : 'images/usuarios/default.png') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$usuario->nombre_usuario}}</h5>
          <p class="card-text">{{$usuario->email}}</p>
          <button wire:click="delete" class="btn btn-primary btn-sm">Confirmar</button>
          <a href="{{route('equipos.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
    </div>
</div>
