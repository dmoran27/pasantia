<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.app');
    }

    public function index2()
    {
        return view('home');
    }

    public function store(Request $request){      

        try {
                
                return  redirect()->route($request->url); 
            
            
        }
        catch (Illuminate\Database\QueryException $e){
            Log::error("HomeController@store: registra un error", array( 'message' => $e->getMessage()));
             return response()->json(['Danger'=>'Error en homecontroler ajax']);
        }
}
}
