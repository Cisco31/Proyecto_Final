<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class UsuariosDelete extends Component
{
    public Usuario $usuario;
    public $foto;

    public function render()
    {
        return view('livewire.usuarios.usuarios-delete');
    }

    public function delete(){
        if ($this->usuario->foto != null) {
            Storage::disk('public')->delete($this->usuario->foto);
        }

        $this->usuario->delete();
        return redirect(route('usuarios.index'));
    }
}

