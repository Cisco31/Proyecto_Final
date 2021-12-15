<?php

use App\Http\Livewire\Equipos\EquiposCreate;
use App\Http\Livewire\Equipos\EquiposDelete;
use App\Http\Livewire\Equipos\EquiposEdit;
use App\Http\Livewire\Equipos\EquiposIndex;
use App\Http\Livewire\Equipos\EquiposRead;
use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Usuarios\UsuariosCreate;
use App\Http\Livewire\Usuarios\UsuariosDelete;
use App\Http\Livewire\Usuarios\UsuariosEdit;
use App\Http\Livewire\Usuarios\UsuariosIndex;
use App\Http\Livewire\Usuarios\UsuariosRead;
use App\Http\Livewire\Ventas\VentasCreate;
use App\Http\Livewire\Ventas\VentasDelete;
use App\Http\Livewire\Ventas\VentasEdit;
use App\Http\Livewire\Ventas\VentasIndex;
use App\Http\Livewire\Ventas\VentasRead;
use App\Models\Equipo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ruta login
Route::get('/login', Login::class)->name('login');

//Agrupacion para proteger rutas de usuarios sin sesion iniciada
Route::group(['middleware' => 'auth'], function (){
    //rutas para equipos
    Route::get('/equipos', EquiposIndex::class)->name('equipos.index');
    Route::get('/equipos/create', EquiposCreate::class)->name('equipos.create');
    Route::get('/equipos/{equipo}/edit', EquiposEdit::class)->name('equipos.edit');
    Route::get('/equipos/{equipo}/delete', EquiposDelete::class)->name('equipos.delete');
    Route::get('/equipos/{equipo}/read', EquiposRead::class)->name('equipos.read');

    //rutas para usuarios
    Route::get('/usuarios', UsuariosIndex::class)->name('usuarios.index');
    Route::get('/usuarios/create', UsuariosCreate::class)->name('usuarios.create');
    Route::get('/usuarios/{usuario}/edit', UsuariosEdit::class)->name('usuarios.edit');
    Route::get('/usuarios/{usuario}/delete', UsuariosDelete::class)->name('usuarios.delete');
    Route::get('/usuarios/{usuario}/read', UsuariosRead::class)->name('usuarios.read');

    //rutas ventas
    Route::get('/ventas', VentasIndex::class)->name('ventas.index');
    Route::get('/ventas/create', VentasCreate::class)->name('ventas.create');
    Route::get('/ventas/{venta}/edit', VentasEdit::class)->name('ventas.edit');
    Route::get('/ventas/{venta}/read', VentasRead::class)->name('ventas.read');
    Route::get('/ventas/{venta}/delete', VentasDelete::class)->name('ventas.delete');

});

