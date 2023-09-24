<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*Rutas IPS*/
Route::get('/IPS/Lista', [App\Http\Controllers\IPSController::class,'index'])->name('IPSregistradas');
Route::get('/IPS/Registrar', [App\Http\Controllers\IPSController::class,'create'])->name('NuevaIPS');

/*Rutas Accidentes de Trabajo*/
Route::get('/ADT/Lista',[App\Http\Controllers\ADTController::class,'index'])->name('ADTregistrados');
Route::get('/ADT/Registrar',[App\Http\Controllers\ADTController::class,'create'])->name('NuevoADT');

/*Rutas Consultas*/

Route::get('Consultas/Usuarios',[App\Http\Controllers\UserController::class,'index'])->name('User');
 