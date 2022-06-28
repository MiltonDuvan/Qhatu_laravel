<?php

namespace App\Http\Controllers;

use App\Models\artesania;
use App\Models\imagen;
use Illuminate\Http\Request;

class ArtesaniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(imagen $imagen)
    {
         $artesanias=artesania::all();
         $imagens=imagen::all();
        //$imagens=artesania::join("imagens","artesanias.id","=","imagens.artesanias_id")->where("artesanias.id",1)->select('imagen')->get();
         return view('index.index',compact('artesanias','imagens'));

    }

    public function show(artesania $artesania)
    {

        return view('detail_craft.detail_craft');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\artesania  $artesania
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artesania  $artesania
     * @return \Illuminate\Http\Response
     */
    public function edit(artesania $artesania)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\artesania  $artesania
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artesania $artesania)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artesania  $artesania
     * @return \Illuminate\Http\Response
     */
    public function destroy(artesania $artesania)
    {
        //
    }
}
