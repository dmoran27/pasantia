<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Buider;

class DependenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dependencias=Dependencia::all();
        
        //return view('modules.dependencias.index', compact('dependencias'));
        return $dependencias;
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
        return view('modules.dependencias.create', compact('dependencias'));
       
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
            'piso' => 'required|string|max:10',
            'edificio_id' => 'required|string|max:255',

        ]);
        
        if ($validator->fails()) {
            return redirect()
                        ->route('dependencias.create')
                        ->withErrors($validator)
                        ->withInput();
        }

        Dependencia::create($request->all());
        return redirect()->route('dependencias.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */
    public function show(Dependencia $dependencia)
    {
        //

        $dependencias=Dependencia::findOrFail($dependencia->id);
        return view('modules.dependencias.show', compact('dependencias'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Dependencia $dependencia)
    {
        //
        
        $dependencias=Dependencia::findOrFail($dependencia->id);
        $dependencias=Dependencia::all();
        $enumoption = General::getEnumValues('dependencias') ;
       
        return view('modules.dependencias.edit', compact('dependencias'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Dependencia $dependencia)
    {
        //

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'piso' => 'required|string|max:10',
            'edificio_id' => 'required|string|max:255',

        ]);


         if ($validator->fails()) {
            
           return redirect()
                        ->route('dependencias.edit', $dependencia)
                        ->withErrors($validator)
                        ->withInput();
            }
      

        Dependencia::findOrFail($dependencia->id)->update($request->all());
        return redirect()->route('dependencias.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dependencias  $dependencias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dependencia $dependencia)
    {
        //
      $dependencias=Dependencia::findOrFail($dependencia->id)->delete();
  
        
        return redirect()->route('dependencias.index');

    }

}
