<?php

namespace App\Http\Controllers;

use App\Caracteristica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Buider;

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
        $caracteristicas=Caracteristica::all();
        $page_title="Caracteristicas";
        
        return view('modules.caracteristicas.index', compact('caracteristicas', 'page_title'));
        //return $caracteristicas;
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
        return view('modules.caracteristicas.create', compact('caracteristicas'));
       
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
            'propiedad' => 'required|string|max:255',
            'usuario_id' => 'required|string|max:255',

        ]);
        
        if ($validator->fails()) {
            return redirect()
                        ->route('caracteristicas.create')
                        ->withErrors($validator)
                        ->withInput();
        }

        Caracteristica::create($request->all());
        return redirect()->route('caracteristicas.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Caracteristica  $caracteristica
     * @return \Illuminate\Http\Response
     */
    public function show(Caracteristica $caracteristica)
    {
        //
          $page_title="Caracteristicas";

        $caracteristicas=Caracteristica::findOrFail($caracteristica->id);
        return view('modules.caracteristicas.show', compact('caracteristicas', 'page_title'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caracteristica  $caracteristica
     * @return \Illuminate\Http\Response
     */
    public function edit(Caracteristica $caracteristica)
    {
        //
        
        $caracteristicas=Caracteristica::findOrFail($caracteristica->id);
          $page_title="Caracteristicas";
       
        return view('modules.caracteristicas.edit', compact('caracteristicas', 'page_title'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caracteristica  $caracteristica
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Caracteristica $caracteristica)
    {
        //

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'propiedad' => 'required|string|max:255',
            'usuario_id' => 'required|string|max:255',

        ]);


         if ($validator->fails()) {
            
           return redirect()
                        ->route('caracteristicas.edit', $caracteristica)
                        ->withErrors($validator)
                        ->withInput();
            }
      

        Caracteristica::findOrFail($caracteristica->id)->update($request->all());
        return redirect()->route('caracteristicas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\caracteristicas  $caracteristicas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caracteristica $caracteristica)
    {
        //
      $caracteristicas=Caracteristica::findOrFail($caracteristica->id)->delete();
  
        
        return redirect()->route('caracteristicas.index');

    }

}
