<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Area;
use App\General;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Buider;
use Illuminate\Support\Facades\Hash;

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
        
        return view('modules.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
         $areas=Area::all();
         $roles=Role::all();
         $enumoption = General::getEnumValues('users','sexo') ;

        return view('modules.users.create', compact('areas', 'enumoption', 'roles'));
       
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
        return view('modules.users.show', compact('users'));


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
        $areas=Area::all();
        $enumoption = General::getEnumValues('users','sexo') ;
       
        return view('modules.users.edit', compact('users','areas','enumoption'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, User $user)
    {
        //

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|string|max:10|unique:users,cedula,' .$user->id,
            'telefono' => 'required|string|max:50',
            'sexo' => 'required|string|max:10',
            'area_id' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'password' => 'required|string|min:6|confirmed',

        ]);


         if ($validator->fails()) {
            
           return redirect()
                        ->route('users.edit', $user)
                        ->withErrors($validator)
                        ->withInput();
            }
      

        User::findOrFail($user->id)->update($request->all());
        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
      $users=User::findOrFail($user->id)->delete();
  
        
        return redirect()->route('users.index');

    }

    public function password(Request $request)
    {
        //
      dd($request);
        return redirect()->route('password');

    }    


}
