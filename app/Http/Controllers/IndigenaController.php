<?php

namespace App\Http\Controllers;

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
        return view('profile_detail.profile_indigena');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.register_indigena');
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
        return view('login.session');
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
