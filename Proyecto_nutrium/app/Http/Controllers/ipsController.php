<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ips;

class ipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ips= ips::all();
        return view('IPS/all',compact('ips',$ips));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('IPS/crear');

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
            'nombre_ips' => 'required|string|max:255',
            'direccion_ips' => 'required|string|max:255',
            'correo_ips' => 'required|email',
            'telefono_ips' => 'required|string|max:20',
        ]);
    
        // Crea una nueva instancia de la IPS y asigna los valores desde la solicitud
        $ips = new IPS;
        $ips->nombre_ips = $request->input('nombre_ips');
        $ips->direccion_ips = $request->input('direccion_ips');
        $ips->correo_ips = $request->input('correo_ips');
        $ips->telefono_ips = $request->input('telefono_ips');
    
        // Guarda la IPS en la base de datos
        $ips->save();
        
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
