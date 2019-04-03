<?php

namespace App\Http\Controllers;

use App\Equipo;
use App\Dependencia;
use App\General;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $equipos=Equipo::all();
        return view('equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $dependencias=Dependencia::all();
         $enumoption = General::getEnumValues('equipos','perteneciente') ;
         $enumoption2 = General::getEnumValues('equipos','estado_equipo') ;
        return view('equipos.create', compact('dependencias','enumoption', 'enumoption2'));
       
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
     $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'identificador' => 'required|string|max:255',
            'marca' => 'required|string|unique:equipos|max:10',
            'modelo' => 'string|max:50',
            'serial' => 'required|string|max:10',
            'estado_equipo' => 'required|string|max:20',
            'perteneciente' => 'required|string|max:255',
            'observacion' => 'required|string|max:1000',
           // 'tipo_id' => 'required|string',
            'user_id' => 'required|string',

        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('equipos.create')
                        ->withErrors($validator)
                        ->withInput();
        }
         Equipo::create($request->all());
        return redirect()->route('equipos.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
        //

        $equipos=Equipo::findOrFail($equipo->id);

        return view('equipos.show', compact('equipos'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $equipo)
    {
        //
        
        $equipos=Equipo::findOrFail($equipo->id);
        $dependencias=Dependencia::all();
        $enumoption = General::getEnumValues('equipos','sexo') ;
        $enumoption2 = General::getEnumValues('equipos','tipo') ;
       
        return view('equipos.edit', compact('equipos','dependencias','enumoption','enumoption2'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Equipo $equipo)
    {
        //

        
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'identificador' => 'required|string|max:255',
            'marca' => 'required|string|unique:equipos|max:10',
            'modelo' => 'string|max:50',
            'serial' => 'required|string|max:10',
            'estado_equipo' => 'required|string|max:20',
            'perteneciente' => 'required|string|max:255',
            'observacion' => 'required|string|max:1000',
            'tipo_id' => 'required|string',
            'user_id' => 'required|string',

        ]);
         if ($validator->fails()) {            
           return redirect()
                        ->route('equipos.edit', $equipo)
                        ->withErrors($validator)
                        ->withInput();
            }
      

        Equipo::findOrFail($equipo->id)->update($request->all());
        return redirect()->route('equipos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        //
      $equipos=Equipo::findOrFail($equipo->id)->delete();
  
        
        return redirect()->route('equipos.index');

    }



}