<?php

namespace App\Http\Controllers;

use App\Models\etnia;
use App\Models\indigena;
use Illuminate\Http\Request;

class IndigenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.session');
        // return view('profile_detail.profile_indigena',);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etnias = etnia::All();
        return view('register.register',compact('etnias'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $indigena= new indigena;
        $indigena->nombres=$request->nombres;
        $indigena->correo=$request->correo;
        $indigena->contraseña=$request->contraseña;
        $indigena->telefono=$request->telefono;
        $indigena->edad=$request->edad;
        $indigena->descripcion=$request->descripcion;
        $indigena->certificado=$request->certificado;
        $indigena->calificacion=$request->calificacion;
        $indigena->etnias_id=$request->etnias_id;
        $indigena->save();
        return redirect()->route('register.create');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\indigena  $indigena
     * @return \Illuminate\Http\Response
     */
    public function show(indigena $indigena)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\indigena  $indigena
     * @return \Illuminate\Http\Response
     */
    public function edit(indigena $indigena)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\indigena  $indigena
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, indigena $indigena)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\indigena  $indigena
     * @return \Illuminate\Http\Response
     */
    public function destroy(indigena $indigena)
    {
        //
    }
}
