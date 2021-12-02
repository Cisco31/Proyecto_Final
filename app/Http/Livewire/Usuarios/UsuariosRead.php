<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;

class UsuariosRead extends Component
{
    public Usuario $usuario;
    public function render()
    {
        return view('livewire.usuarios.usuarios-read');
    }
}
