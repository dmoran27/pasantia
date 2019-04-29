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
        $clientes=Cliente::all();
        $dependencias=Dependencia::all();
        return view('modules.clientes.index', compact('clientes', 'dependencias'));
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
         $enumoption = General::getEnumValues('clientes','sexo') ;
         $enumoption2 = General::getEnumValues('clientes','tipo') ;
        return view('modules.clientes.create', compact('dependencias','enumoption', 'enumoption2'));
       
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
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|string|unique:clientes|max:10',
            'telefono' => 'string|max:50',
            'sexo' => 'required|string|max:10',
            'tipo' => 'required|string|max:20',
            'dependencia_id' => 'required|string|max:255',
            'email' => 'string|email|max:255|unique:clientes,email',
            'user_id' => 'required|string',

        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('clientes.create')
                        ->withErrors($validator)
                        ->withInput();
        }
         Cliente::create($request->all());
        return redirect()->route('clientes.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //

        $clientes=Cliente::findOrFail($cliente->id);

        return view('modules.clientes.show', compact('clientes'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
        
        $clientes=Cliente::findOrFail($cliente->id);
        $dependencias=Dependencia::all();
        $enumoption = General::getEnumValues('clientes','sexo') ;
        $enumoption2 = General::getEnumValues('clientes','tipo') ;
       
        return view('modules.clientes.edit', compact('clientes','dependencias','enumoption','enumoption2'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Cliente $cliente)
    {
        //

        
         $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|string|max:10|unique:clientes,cedula,'.$cliente->id,
            'telefono' => 'string|max:50',
            'sexo' => 'required|string|max:10',
            'tipo' => 'required|string|max:20',
            'dependencia_id' => 'required|string|max:255',
            'email' => 'string|email|max:255|unique:clientes,email,'.$cliente->id,
            'user_id' => 'required|string',

       
        ]);

         if ($validator->fails()) {            
           return redirect()
                        ->route('clientes.edit', $cliente)
                        ->withErrors($validator)
                        ->withInput();
            }
      

        Cliente::findOrFail($cliente->id)->update($request->all());
        return redirect()->route('clientes.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
      $clientes=Cliente::findOrFail($cliente->id)->delete();
  
        
        return redirect()->route('clientes.index');

    }

    public function password(Request $request)
    {
        //
      dd($request);
        return redirect()->route('password');

    }    


}