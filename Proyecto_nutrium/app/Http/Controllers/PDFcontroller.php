<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class PDFcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users=user::with('datos')->get();
        return view('CONSULTAS/Usuario/afiliacion',compact('users',$users));
    }

    public function pdf()
    {
        // Lógica para determinar el archivo PDF correspondiente a la opción seleccionada.
        $nombrePdf = 'FORMATO_AFILIACIÓN_ARL.pdf';
        $rutaPdf = public_path("PDF/{$nombrePdf}");

        // Verifica si el archivo PDF existe.
        if (file_exists($rutaPdf)) {
            // Retorna el archivo PDF en la respuesta.
            return response()->download($rutaPdf, $nombrePdf, [
                'Content-Type' => 'application/pdf',
            ]);
        } else {
            // Si el archivo no existe, puedes redirigir o mostrar un mensaje de error.
            return redirect()->back()->with('error', 'El PDF no está disponible.');
        }
    }
    public function informe()
    {
        // Lógica para determinar el archivo PDF correspondiente a la opción seleccionada.
        $nombrePdf = 'Informe_de_ADT_Sebastian_03_12_2023.pdf';
        $rutaPdf = public_path("PDF/{$nombrePdf}");

        // Verifica si el archivo PDF existe.
        if (file_exists($rutaPdf)) {
            // Retorna el archivo PDF en la respuesta.
            return response()->download($rutaPdf, $nombrePdf, [
                'Content-Type' => 'application/pdf',
            ]);
        } else {
            // Si el archivo no existe, puedes redirigir o mostrar un mensaje de error.
            return redirect()->back()->with('error', 'El PDF no está disponible.');
        }
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
