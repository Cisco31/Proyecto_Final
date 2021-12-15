<?php

namespace App\Http\Livewire\Ventas;

class RulesVenta
{
    public static function reglas()
    {
        return [
            'venta.id_usuario' => 'required',
            'venta.id_equipo' => 'required'
        ];
    }
}
