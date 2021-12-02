<div>
    <form wire:submit.prevent="editar">
        <div class="card">
            <div class="card-header">
                Editar Usuario
            </div>
            <div class="card-body">
                @include('livewire.usuarios.formulario')
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-warning btn-sm "><i class="fa fa-edit"></i> Modificar</button>
                <a href="{{route("usuarios.index")}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
