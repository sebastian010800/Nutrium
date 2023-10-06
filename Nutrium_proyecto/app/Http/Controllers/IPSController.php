<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ips;

class IPSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ips = Ips::all(); // Obtener todas las IPS desde la base de datos
    return view('IPS.IPSregistradas', compact('ips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('IPS.NuevaIPS'); // Suponiendo que 'IPS/NuevaIPS' es la vista que quieres mostrar
    }

    public function store(Request $request)
    {
        // Validación de datos (puedes agregar reglas de validación aquí)
        $request->validate([
            'nombreIPS' => 'required|string|max:255',
            'telefonoIPS' => 'nullable|string|max:255',
            'direccionIPS' => 'nullable|string|max:255',
            'correoIPS' => 'nullable|email|unique:ips,correo_electronico_ips',
        ]);

        $ips = new ips();
        $ips->nombre_ips = $request->input('nombreIPS');
        $ips->telefono_ips = $request->input('telefonoIPS');
        $ips->direccion_ips = $request->input('direccionIPS');
        $ips->correo_electronico_ips = $request->input('correoIPS');
        $ips->save();
        // Redirige a una página de éxito o haz lo que desees después de guardar la IPS
        return view('/home');
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
