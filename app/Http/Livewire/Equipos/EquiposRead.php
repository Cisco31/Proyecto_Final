<?php

namespace App\Http\Livewire\Equipos;

use App\Models\Equipo;
use Livewire\Component;

class EquiposRead extends Component
{
    public Equipo $equipo;
    public function render()
    {
        return view('livewire.equipos.equipos-read');
    }
}
