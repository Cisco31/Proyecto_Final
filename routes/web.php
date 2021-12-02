<?php

use App\Http\Livewire\Equipos\EquiposCreate;
use App\Http\Livewire\Equipos\EquiposDelete;
use App\Http\Livewire\Equipos\EquiposEdit;
use App\Http\Livewire\Equipos\EquiposIndex;
use App\Http\Livewire\Equipos\EquiposRead;
use App\Http\Livewire\Usuarios\UsuariosCreate;
use App\Http\Livewire\Usuarios\UsuariosDelete;
use App\Http\Livewire\Usuarios\UsuariosEdit;
use App\Http\Livewire\Usuarios\UsuariosIndex;
use App\Http\Livewire\Usuarios\UsuariosRead;
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



Route::get('/equipos', EquiposIndex::class)->name('equipos.index');
Route::get('/equipos/create', EquiposCreate::class)->name('equipos.create');
Route::get('/equipos/{equipo}/edit', EquiposEdit::class)->name('equipos.edit');
Route::get('/equipos/{equipo}/delete', EquiposDelete::class)->name('equipos.delete');
Route::get('/equipos/{equipo}/read', EquiposRead::class)->name('equipos.read');

Route::get('/usuarios', UsuariosIndex::class)->name('usuarios.index');
Route::get('/usuarios/create', UsuariosCreate::class)->name('usuarios.create');
Route::get('/usuarios/{usuario}/edit', UsuariosEdit::class)->name('usuarios.edit');
Route::get('/usuarios/{usuario}/delete', UsuariosDelete::class)->name('usuarios.delete');
Route::get('/usuarios/{usuario}/read', UsuariosRead::class)->name('usuarios.read');
