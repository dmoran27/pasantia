<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaracteristicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Caracteristicas=Caracteristica::all();
        return view('caracteristicas.index', compact('caracteristicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('caracteristicas.create');

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

        Caracteristica::create($request->all());
        return redirect()->route('Caracteristica.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Caracteristica  $Caracteristica
     * @return \Illuminate\Http\Response
     */
    public function show(Caracteristica $Caracteristica)
    {
        //

        $caracteristicas=Caracteristica::findOrFail($Caracteristicas);
       // return $caracteristicas;
        return view('caracteristicas.show', compact('caracteristicas'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caracteristica  $Caracteristica
     * @return \Illuminate\Http\Response
     */
    public function edit(Caracteristica $Caracteristica)
    {
        //
        $caracteristicas=Caracteristica::findOrFail($Caracteristicas);
        return view('caracteristicas.edit', compact('caracteristicas'));

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
