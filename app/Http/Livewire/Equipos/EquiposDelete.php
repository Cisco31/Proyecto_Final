<?php

namespace App\Http\Livewire\Equipos;

use App\Models\Equipo;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class EquiposDelete extends Component
{
    public Equipo $equipo;

    public function render()
    {
        return view('livewire.equipos.equipos-delete');
    }

    public function delete(){
        if ($this->equipo->foto != null) {
            Storage::disk('public')->delete($this->equipo->foto);
        }
        $this->equipo->delete();
        return redirect(route('equipos.index'));
    }
}
