<?php

namespace App\Http\Controllers;

use App\Models\comprador;
use Illuminate\Http\Request;

class CompradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.register');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function show(comprador $comprador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function edit(comprador $comprador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comprador $comprador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function destroy(comprador $comprador)
    {
        //
    }
}
