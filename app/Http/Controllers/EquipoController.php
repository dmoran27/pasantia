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
        
        $page_title='Equipos';
        $equipos=Equipo::all();
        return view('modules.equipos.index', compact('page_title','equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $page_title='Crear Equipos';
                 $enumoption = General::getEnumValues('equipos','perteneciente') ;
         $enumoption2 = General::getEnumValues('equipos','estado_equipo') ;
        return view('modules.equipos.create', compact('page_title','enumoption', 'enumoption2'));
       
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
    public function show($id)
    {
        //

        $equipos=Equipo::findOrFail($id);
        $page_title='Equipos';
        return response()->json($equipos);


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
         $enumoption = General::getEnumValues('equipos','perteneciente') ;
         $enumoption2 = General::getEnumValues('equipos','estado_equipO') ;
        $page_title='Editar Equipos';
        return view('modules.equipos.edit', compact('page_title','equipos','enumoption','enumoption2'));

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
    public function destroy($id)
    {
        //
      $equipos=Equipo::findOrFail($id)->delete();
      return response()->json(['id'=>$id]);


    }

    public function changeStatus() 
    {
        $id = Input::get('id');

        $equipos = Equipo::findOrFail($id);
        $equipos->is_published = !$equipos->is_published;
        $equipos->save();

        return response()->json($equipos);
    }



}