<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Dependencia;
use App\General;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $softwares=Software::all();
        return view('softwares.index', compact('softwares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $caracteristicas=Caracteristica::all();
        return view('softwares.create', compact('caracteristicas'));
       
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
            'tipos_id' => 'required|string',
            'descripcion' => 'required|string|max:255',            
            'user_id' => 'required|string',

        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('softwares.create')
                        ->withErrors($validator)
                        ->withInput();
        }
         Softwares::create($request->all());
        return redirect()->route('softwares.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $software)
    {
        //

        $softwares=Softwares::findOrFail($software->id);

        return view('softwares.show', compact('softwares'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $software)
    {
        //
        
        $softwares=Softwares::findOrFail($software->id);
        $dependencias=Caracteristica::all();
        $enumoption = General::getEnumValues('softwares','sexo') ;
        $enumoption2 = General::getEnumValues('softwares','tipo') ;
       
        return view('softwares.edit', compact('softwares','dependencias','enumoption','enumoption2'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Cliente $software)
    {
        //

        
         $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'tipos_id' => 'required|string',
            'descripcion' => 'required|string|max:255',            
            'user_id' => 'required|string',

       
        ]);

         if ($validator->fails()) {            
           return redirect()
                        ->route('softwares.edit', $software)
                        ->withErrors($validator)
                        ->withInput();
            }
      

        Softwares::findOrFail($software->id)->update($request->all());
        return redirect()->route('softwares.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\softwares  $softwares
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $software)
    {
        //
      $softwares=Softwares::findOrFail($software->id)->delete();
  
        
        return redirect()->route('softwares.index');

    }

    public function password(Request $request)
    {
        //
      dd($request);
        return redirect()->route('password');

    }    


}