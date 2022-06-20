<?php

namespace App\Http\Controllers;

use App\Models\artesania;
use Illuminate\Http\Request;

class ArtesaniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artesanias=artesania::join("imagens","artesanias.id","=",'imagens.artesanias_id')->where("artesanias.id",1)->select('nombre','precio','imagen')->get();
        $artesanias2=artesania::join("imagens","artesanias.id","=",'imagens.artesanias_id')->where("artesanias.id",2)->select('nombre','precio','imagen')->get();
        $artesanias3=artesania::join("imagens","artesanias.id","=",'imagens.artesanias_id')->where("artesanias.id",3)->select('nombre','precio','imagen')->get();
        $artesanias4=artesania::join("imagens","artesanias.id","=",'imagens.artesanias_id')->where("artesanias.id",4)->select('nombre','precio','imagen')->get();
        $artesanias5=artesania::join("imagens","artesanias.id","=",'imagens.artesanias_id')->where("artesanias.id",5)->select('nombre','precio','imagen')->get();
        $artesanias6=artesania::join("imagens","artesanias.id","=",'imagens.artesanias_id')->where("artesanias.id",3)->select('nombre','precio','imagen')->get();
        $artesanias7=artesania::join("imagens","artesanias.id","=",'imagens.artesanias_id')->where("artesanias.id",1)->select('nombre','precio','imagen')->get();
        $artesanias8=artesania::join("imagens","artesanias.id","=",'imagens.artesanias_id')->where("artesanias.id",4)->select('nombre','precio','imagen')->get();
        return view('index.index', compact('artesanias','artesanias2','artesanias3','artesanias4','artesanias5','artesanias6','artesanias7','artesanias8'));

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
    public function show(artesania $artesania)
    {
        
        return view('detail_craft.detail_craft');
    }

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
