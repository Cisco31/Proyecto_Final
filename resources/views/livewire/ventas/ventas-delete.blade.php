<div>
    <div class="mx-auto card text-center" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Eliminar Venta</h5>
          <p class="card-text">Usuario que realizo la compra:</p>
          <p class="card-text">{{$data->nombre_usuario}}</p>
          <p class="card-text">{{$data->email}}</p>
          <p class="card-text">Compra realizada:</p>
          <p class="card-text">{{$data->nombre}}</p>
          <p class="card-text">$ {{$data->valor}}</p>
          <button wire:click="delete" class="btn btn-primary btn-sm">Confirmar</button>
          <a href="{{route('ventas.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
    </div>
</div>
