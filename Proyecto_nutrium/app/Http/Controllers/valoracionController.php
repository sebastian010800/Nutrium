<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\valoracion;
use App\Models\investigador;
use App\Models\adt;

class valoracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $valoraciones = valoracion::with('investigador','adt')->get();
        return view('ADT/Valoracion/all',compact('valoraciones'));
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
        $investigadores=investigador::all();
        return view('ADT/Valoracion/crear',compact('investigadores','adts'));
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
        $valoracion = new valoracion();
        $valoracion->valoracion_primaria = $request->input('valoracion_primaria');
        $valoracion->valoracion_secundaria = $request->input('valoracion_secundaria');
        $valoracion->investigador_id = $request->input('investigador_id');
        $valoracion->adt_id = $request ->input('adt_id');
        $valoracion->save();

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
