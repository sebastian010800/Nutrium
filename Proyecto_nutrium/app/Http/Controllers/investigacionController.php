<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investigador;

class investigacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $investigadores = Investigador::all();
        return view('CONSULTAS/Investigadores/all',compact('investigadores',$investigadores));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('CONSULTAS/Investigadores/crear');
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
            'nombre_investigador' => 'required|string|max:255',
            'tipo_investigador' => 'required|string|max:255',
            'numero_licencia' => 'required|string|max:255',
            'aplica_cargo' => 'boolean', // Asumiendo que se espera un valor booleano (1 o 0)
        ]);
    
        // Crea una nueva instancia de InvestigacionAccidente y asigna los valores desde la solicitud
        $investigador = new Investigador;
        $investigador->nombre_investigador = $request->input('nombre_investigador');
        $investigador->tipo_investigador = $request->input('tipo_investigador');
        $investigador->numero_licencia = $request->input('numero_licencia');
        $investigador->aplica_cargo = $request->input('aplica_cargo', 0); // Valor predeterminado de 0 si no se proporciona
    
        // Guarda el investigador en la base de datos
        $investigador->save();
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
