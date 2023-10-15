<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localidad;
use App\Models\Adt;
use App\Models\User;
use DB;

class ADTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adts = DB::table('adt')
        ->join('localidad', 'adt.id_localidad', '=', 'localidad.id_localidad')
        ->join('users', 'users.cedula_user', '=', 'adt.id_user')
        ->select('adt.fecha_accidente', 'adt.hora_accidente', 'adt.descripcion_accidente', 'adt.calificacion_accidente', 'localidad.nombre_localidad', 'users.name as nombre_usuario')
        ->get();    
        return view('ADT/ADTregistradas', compact('adts'));
        //return view('ADT/ADTregistradas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $localidades = Localidad::all(); // Obtener todas las localidades desde la base de datos
        return view('ADT/NuevoADT', compact('localidades'));
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
        $validatedData = $request->validate([
            'fecha_accidente' => 'required|date',
            'hora_accidente' => 'required',
            'descripcion_accidente' => 'required',
            'calificacion_accidente' => 'required|integer',
            'id_localidad' => 'required',
            'id_user' => 'required',
        ]);

        // Crea un nuevo objeto ADT con los datos validados
        $adt = new ADT();
        $adt->fecha_accidente = $request->input('fecha_accidente');
        $adt->hora_accidente = $request->input('hora_accidente');
        $adt->descripcion_accidente = $request->input('descripcion_accidente');
        $adt->calificacion_accidente = $request->input('calificacion_accidente');
        $adt->id_localidad = $request->input('id_localidad');
        $adt->id_user = $request->input('id_user');

        // Guarda el objeto en la base de datos
        $adt->save();
        // Redirecciona a la vista de la lista de ADTs o a donde desees
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
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
