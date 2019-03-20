<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Buider;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('users.create');
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
            'cedula' => 'required|string|unique:users|max:10',
            'telefono' => 'required|string|max:50',
            'sexo' => 'required|string|max:10',
            'area_id' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',

        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('users.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        User::create($request->all());
        return redirect()->route('users.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //

        $users=User::findOrFail($user->id);
       // return $users;
        return view('users.show', compact('users'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $users=User::findOrFail($user->id);
        return view('users.edit', compact('users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users)
    {
        //
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|string|unique:users|max:10',
            'telefono' => 'required|string|max:50',
            'sexo' => 'required|string|max:10',
            'area_id' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',

        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('users.update')
                        ->withErrors($validator)
                        ->withInput();
        }
        User::findOrFail($users)->update($request->all($users->id));
        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $users)
    {
        //
        
        $mensaje = User::firstOrFail($users->id)->delete();
      
        return redirect()->route('users.index');

    }


}
