<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
