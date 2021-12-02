<?php

namespace App\Http\Livewire\Usuarios;

class RulesUsuario
{
    public static function reglas()
    {
        return [
            'usuario.nombre_usuario'=>'required',
            'usuario.email'=>'required|string',
            'usuario.password'=>'string|required',
            'foto' => 'nullable|image'
        ];
    }
}
