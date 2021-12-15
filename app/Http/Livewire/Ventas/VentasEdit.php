<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Equipo;
use App\Models\Usuario;
use App\Models\Venta;
use Livewire\Component;

class VentasEdit extends Component
{
    public Venta $venta;

    public function mount($venta){
        $this->venta = $venta;
    }

    public function render()
    {
        $equipos = Equipo::all();
        $usuarios = Usuario::all();
        return view('livewire.ventas.ventas-edit', compact('equipos', 'usuarios'));
    }
    public function editar(){

        $this->validate();
        $this->venta->save();
        $this->emit('alerta-editar', 'La venta se modifico con exito');
        return redirect(route('ventas.index'));


    }

    protected function rules(){
        return RulesVenta::reglas();
    }

}
