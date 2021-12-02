<?php

namespace App\Http\Livewire\Equipos;

class RulesEquipo
{
    public static function reglas()
    {
        return [
            'equipo.nombre'=>'required',
            'equipo.pais'=>'required|string',
            'equipo.jugadores'=>'numeric|required',
            'equipo.estadio'=>'nullable|string',
            'equipo.valor'=>'numeric|required',
            'foto' => 'nullable|image'
        ];
    }
}
