<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    protected $paginationTheme = 'bootstrap';
    public function index()
    {
        $equipos = Equipo::paginate(5);
        return view('equipos.index', compact('equipos'));
    }

    public function registro()
    {
        $equipo = new Equipo();
        $equipo->nombre = 'Ajax';
        $equipo->pais = 'Holanda';
        $equipo->jugadores = 23;
        $equipo->estadio = 'Johan Cruijff Arena';
        $equipo->valor = 510000;
        $equipo->save();

        return 'se registro el equipo con exito';
    }
}
