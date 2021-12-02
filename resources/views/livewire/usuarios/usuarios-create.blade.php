<div>
    <form wire:submit.prevent="crear">
        <div class="card">
            <div class="card-header">
                Crear Nuevo Usuario
            </div>
            <div class="card-body">
                @include('livewire.usuarios.formulario')
            </div>
            <div class="card-footer text-center">
                <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-success btn-sm">Guardar</button>
                <a href="{{route("usuarios.index")}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
