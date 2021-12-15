<div>
    <form wire:submit.prevent="crear">
        <div class="card">
            <div class="card-header">
                Crear Nueva Venta
            </div>
            <div class="card-body">
                @include('livewire.ventas.formulario')
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-success btn-sm">Guardar</button>
                <a href="{{route("ventas.index")}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
