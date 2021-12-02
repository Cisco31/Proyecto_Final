<?php

namespace App\Http\Livewire\Equipos;

use App\Models\Equipo;
use Livewire\Component;

class EquiposDelete extends Component
{
    public Equipo $equipo;

    public function render()
    {
        return view('livewire.equipos.equipos-delete');
    }

    public function delete(){
        $this->equipo->delete();
        return redirect(route('equipos.index'));
    }
}
