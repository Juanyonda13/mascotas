<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Categorias;
use App\Models\Raza;
use App\Models\Genero;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas= Mascota::simplePaginate();
        $razas= Raza::simplePaginate();
        return view('mascotas.index',compact('mascotas','razas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $razas= Raza::all();
        $categorias=Categorias::all();
        $generos=Genero::all();
        return view('mascotas.create',compact('razas','categorias','generos',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mascotas=new Mascota;
        $mascotas->nombre=$request->nombre;
        $mascotas->categorias_id=$request->categorias_id;
        $mascotas->fotos=$request->fotos;
        $mascotas->razas_id=$request->razas_id;
        $mascotas->generos_id=$request->generos_id;
        $mascotas->save();
        return redirect()->route('mascotas.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit(Mascota $mascota )
    {
        $razas= Raza::all();
        $categorias=Categorias::all();
        $generos=Genero::all();
        return view('mascotas.edit',compact('mascota','razas','categorias','generos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $mascota)
    {
        $mascota->nombre=$request->nombre;
        $mascota->categorias_id=$request->categorias_id;
        $mascota->fotos=$request->fotos;
        $mascota->razas_id=$request->razas_id;
        $mascota->generos_id=$request->generos_id;
        $mascota->save();
        return redirect()->route('mascotas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        $mascota->save();
        return redirect()->route('mascotas.index');
    }
}
