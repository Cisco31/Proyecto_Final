<div>
    <div class="mx-auto card text-center" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Datos de la venta</h5>
          <p class="card-text">Usuario que realizo la compra:</p>
          <p class="card-text">{{$data->nombre_usuario}}</p>
          <p class="card-text">{{$data->email}}</p>
          <p class="card-text">Compra realizada:</p>
          <p class="card-text">{{$data->nombre}}</p>
          <p class="card-text">$ {{$data->valor}}</p>
          <a href="{{route('ventas.index')}}" class="btn btn-secondary btn-sm ">Regresar</a>
        </div>
    </div>
</div>
