<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\localidad;
class localidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $localidades=localidad::all();
        return view('CONSULTAS/Localidad/localidades',compact('localidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('CONSULTAS/Localidad/Nueva_localidad');
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
            'nombre_localidad' => 'required|string|max:255',
            'descripcion_localidad' => 'required|string',
        ]);
    
        // Crea una nueva instancia de la Localidad y asigna los valores desde la solicitud
        $localidad = new Localidad;
        $localidad->nombre_localidad = $request->input('nombre_localidad');
        $localidad->descripcion_localidad = $request->input('descripcion_localidad');
    
        // Guarda la Localidad en la base de datos
        $localidad->save();
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
