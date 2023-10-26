<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/IPS/IPS_registradas',[App\Http\Controllers\ipsController::class, 'index'])->name('IPS_registradas');
Route::get('/IPS/Nueva_IPS',[App\Http\Controllers\ipsController::class, 'create'])->name('Nueva_IPS');
Route::post('/IPS/Nueva_IPS',[App\Http\Controllers\ipsController::class, 'store'])->name('Guardar_ips.store');

Route::get('/CONSULTAS', [App\Http\Controllers\datosController::class, 'index'])->name('Usuarios');
Route::put('/datos/{dato}', [App\Http\Controllers\datosController::class, 'update'])->name('datos.update');

Route::get('/CONSULTAS/Localidad',[App\Http\Controllers\localidadController::class, 'index'])->name('Localidades');
Route::get('/CONSULTAS/Nueva_localidad',[App\Http\Controllers\localidadController::class, 'create'])->name('Nueva_localidad');
Route::post('/CONSULTAS/Nueva_localidad',[App\Http\Controllers\localidadController::class, 'store'])->name('Guardar_lc.store');

Route::get('/CONSULTAS/Grupos_investigadores',[App\Http\Controllers\investigacionController::class, 'index'])->name('Investigadores');
Route::get('/CONSULTAS/Nuevo_investigador',[App\Http\Controllers\investigacionController::class, 'create'])->name('Nuevo_investigador');
Route::post('/CONSULTAS/Nuevo_investigador',[App\Http\Controllers\investigacionController::class, 'store'])->name('Guardar_inv.store');

Route::get('/Accidentes_registrados',[App\Http\Controllers\adtController::class, 'index'])->name('Adt_registrados');
Route::get('/Nuevo_adt',[App\Http\Controllers\adtController::class, 'create'])->name('Nuevo_adt');
Route::post('/Nuevo_adt',[App\Http\Controllers\adtController::class, 'store'])->name('Guardar_adt.store');

Route::get('/Valoraciones',[App\Http\Controllers\valoracionController::class, 'index'])->name('Valoraciones');
Route::get('/Nueva_valoracion',[App\Http\Controllers\valoracionController::class, 'create'])->name('Nueva_valoracion');
Route::post('/Nueva_valoracion',[App\Http\Controllers\valoracionController::class, 'store'])->name('Guardar_v.store');

Route::get('/ADT/Traslados',[App\Http\Controllers\trasladoController::class, 'index'])->name('Traslados');
Route::get('/ADT/Nuevo_traslado',[App\Http\Controllers\trasladoController::class, 'create'])->name('Nuevo_traslado');
Route::post('/ADT/Nuevo_traslado',[App\Http\Controllers\trasladoController::class, 'store'])->name('Guardar_tr.store');