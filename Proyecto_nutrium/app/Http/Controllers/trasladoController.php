<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traslado;
use App\Models\Adt;
Use App\Models\Ips;

class trasladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $traslados=Traslado::with('Adt','Ips')->get();
        return view('ADT/Traslado/all',compact('traslados'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $adts=adt::all();
        $ips=ips::all();
        return view('ADT/Traslado/crear',compact('adts','ips'));
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
            'hora_traslado' => 'required',
            'fecha_traslado' => 'required',
            'placa_ambulancia' => 'required',
            'nombre_paramedicos' => 'required',
            'ips_id' => 'required|exists:ips,id', // Validación para comprobar si la IPS existe
            'adt_id' => 'required|exists:adt,id', // Validación para comprobar si el ADT existe
        ]);
    
        // Crear una nueva instancia de Traslado
        $traslado = new Traslado();
    
        // Asignar los valores de los campos
        $traslado->hora_traslado = $request->hora_traslado;
        $traslado->fecha_traslado = $request->fecha_traslado;
        $traslado->placa_ambulancia = $request->placa_ambulancia;
        $traslado->nombre_paramedicos = $request->nombre_paramedicos;
        $traslado->ips_id = $request->ips_id;
        $traslado->adt_id = $request->adt_id;
    
        // Guardar el traslado en la base de datos
        $traslado->save();

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
