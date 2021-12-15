<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Equipo;
use App\Models\Usuario;
use App\Models\Venta;
use Livewire\Component;

class VentasCreate extends Component
{
    public Venta $venta;

    public function mount(){
        $this->venta = new Venta();
    }

    public function render()
    {
        $equipos = Equipo::all();
        $usuarios = Usuario::all();
        return view('livewire.ventas.ventas-create', compact('usuarios','equipos'));
    }

    public function crear(){

        $this->validate();
        $this->venta->save();
        $this->emit('alerta-crear', 'Se realizo con exito la venta');
        return redirect(route('ventas.index'));


    }

    protected function rules(){
        return RulesVenta::reglas();
    }

}
