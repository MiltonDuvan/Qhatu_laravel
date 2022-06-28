<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\indigena;

class register_inidega_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('register.register'); 
        // return view('register.register_indigena'); 
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$indigena= new indigena;
       // $indigena->nombres=$request->nombres;
        //$indigena->correo=$request->correo;
       // $indigena->contraseña=$request->contraseña;
        // $indigena->telefono=$request->telefono;
        // $indigena->edad=$request->edad;
        // $indigena->descripcion=$request->descripcion;
        // $indigena->certificado=$request->certificado;
        // $indigena->calificacion=$request->calificacion;
        // $indigena->etnias_id=$request->etnias_id;
       
        

        //$indigena->save();
        // return redirect('/')->route('register.register');
        //return redirect()->route('register.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
