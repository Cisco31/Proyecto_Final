@props(['color'=>'light'])
<div class="card">
    <div class="card-header bg-{{$color}}">
        {{ $headerText }}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $header }}</h5>
        <p class="card-text">{{ $body }}</p>
        <x-boton color="primary">
            <x-slot name="contenido">
                Imprimir
            </x-slot>
        </x-boton>
    </div>
</div>
