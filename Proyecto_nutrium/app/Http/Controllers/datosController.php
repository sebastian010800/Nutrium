<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datos;
use App\Models\User;

class datosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos = datos::with('user')->get();
        return view('CONSULTAS/Usuario/Usuarios',compact('datos',$datos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function update(Request $request, datos $dato)
    {
        //
        $request->validate([
            'fecha_nacimiento' => 'required|date',
            'genero' => 'required|in:Masculino,Femenino', // Asegúrate de que los valores sean válidos
            'celular' => 'required',
            'direccion' => 'required',
            'contacto_emergencia_nombre' => 'required',
            'contacto_emergencia_telefono' => 'required',
            'peso' => 'required',
            'altura' => 'required',
            'grupo_sanguineo' => 'required',
            // Agrega validaciones para los demás campos de actualización
        ]);

        // Actualiza los datos del registro
        $dato->update([
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'genero' => $request->input('genero'),
            'celular' => $request->input('celular'),
            'direccion' => $request->input('direccion'),
            'contacto_emergencia_nombre' => $request->input('contacto_emergencia_nombre'),
            'contacto_emergencia_telefono' => $request->input('contacto_emergencia_telefono'),
            'peso' => $request->input('peso'),
            'altura' => $request->input('altura'),
            'grupo_sanguineo' => $request->input('grupo_sanguineo'),
            // Actualiza los demás campos de actualización
        ]);
        return view('home');
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
