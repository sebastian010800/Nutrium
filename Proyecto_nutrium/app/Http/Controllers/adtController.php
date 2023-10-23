<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adt;
use App\Models\localidad;
use App\Models\User;
use App\Models\investigador;
use App\Models\ips;



class adtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $adts=adt::with('localidad','user')->get();
        return view('ADT/Accidentes/all',compact('adts',$adts));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $localidades=localidad::all();
        $users=User::all();
        return view('ADT/Accidentes/crear',compact('localidades','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'required',
            'hora_accidente' => 'required',
            'fecha_accidente' => 'required',
            'descripcion_accidente' => 'required',
            'calificacion_accidente' => 'required',
            'localidad_accidente' => 'required',
        ]);
    
        // Crear un nuevo objeto Adt y asignar los valores
        $adt = new Adt();
        $adt->user_id = $request->input('user_id');
        $adt->hora_accidente = $request->input('hora_accidente');
        $adt->fecha_accidente = $request->input('fecha_accidente');
        $adt->descripcion_accidente = $request->input('descripcion_accidente');
        $adt->calificacion_accidente = $request->input('calificacion_accidente');
        $adt->localidad_accidente = $request->input('localidad_accidente');
    
        // Otras asignaciones de campos adicionales, si es necesario
    
        // Guardar el nuevo accidente en la base de datos
        $adt->save();

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }
    /**
     *
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}