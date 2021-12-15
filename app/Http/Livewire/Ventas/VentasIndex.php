<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class VentasIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargado = false;

    public function render()
    {
        $ventas = ($this->cargado == true) ? Venta::join('usuarios', 'ventas.id_usuario', '=', 'usuarios.id')
        ->join('equipos', 'ventas.id_equipo', '=', 'equipos.id')
        ->select('ventas.*', 'usuarios.nombre_usuario', 'equipos.nombre')
        ->where('nombre_usuario', 'LIKE', '%' . $this->search . '%')
        ->orwhere('nombre', 'LIKE', '%' . $this->search . '%')
        ->paginate(3) : [];

        return view('livewire.ventas.ventas-index',compact('ventas'));
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
