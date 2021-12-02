<?php

namespace App\Http\Livewire\Equipos;

use App\Models\Equipo;
use Livewire\Component;
use Livewire\WithPagination;

class EquiposIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargado = false;

    public function render()
    {

        $equipos = ($this->cargado == true) ? Equipo::where('nombre', 'LIKE', '%' . $this->search . '%')
        ->orwhere('pais', 'LIKE', '%' . $this->search . '%')
        ->orwhere('jugadores', 'LIKE', '%' . $this->search . '%')
        ->orwhere('estadio', 'LIKE', '%' . $this->search . '%')
        ->orwhere('valor', 'LIKE', '%' . $this->search . '%')
        ->paginate(20) : [];
        return view('livewire.equipos.equipos-index', compact('equipos'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function cargando()
    {
        $this->cargado = true;
    }

}
