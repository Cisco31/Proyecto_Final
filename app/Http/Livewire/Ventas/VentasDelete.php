<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;

class VentasDelete extends Component
{
    public Venta $venta;
    public function render()
    {
        $data = Venta::join('usuarios', 'ventas.id_usuario', '=', 'usuarios.id')
        ->where('usuarios.id', '=', $this->venta->id_usuario)
        ->join('equipos', 'ventas.id_equipo', '=', 'equipos.id')
        ->where('equipos.id', '=', $this->venta->id_equipo)
            ->select(
                'usuarios.*',
                'equipos.*'
            )->paginate(5);
        $data = $data[0];
        return view('livewire.ventas.ventas-delete',compact('data'));
    }

    public function delete(){
        $this->venta->delete();
        return redirect(route('ventas.index'));
    }
}
