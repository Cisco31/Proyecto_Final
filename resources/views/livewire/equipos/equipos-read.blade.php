<div>
    <div class="mx-auto card text-center" style="width: 18rem;">
        <img style="width: 170px;height:170px;" class="mx-auto mt-3 card-img-top"
            src="{{ Storage::disk('public')->url($equipo->foto ? $equipo->foto : 'images/equipos/default.png') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$equipo->nombre}}</h5>
          <p class="card-text">{{$equipo->pais}}</p>
          <p class="card-text">{{$equipo->jugadores}} jugadores</p>
          <p class="card-text">{{$equipo->estadio}}</p>
          <p class="card-text">${{$equipo->valor}}</p>
          <a href="{{route('equipos.index')}}" class="btn btn-secondary btn-sm ">Regresar</a>
        </div>
    </div>
</div>
