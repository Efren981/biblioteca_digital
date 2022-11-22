<?php

namespace App\Http\Controllers;

use App\Models\carreras;
use Illuminate\Http\Request;

class CarrerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras=carreras::all();
        return view('carreras.index',compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carreras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "descripcion"=>"required|min:5|max:100|unique:carreras",
            ],[],["name"=>"nombre","content"=>"contenido"]);
        Carreras::create(['descripcion'=>$request->descripcion,]);
        return redirect()->route('carreras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function show(carreras $carreras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function edit(carreras $carrera)
    {
        return view('carreras.update',compact('carrera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carreras $carrera)
    {
        $request->validate([
            "descripcion"=>"required|min:5|max:100|unique:carreras",
            ],[],["name"=>"nombre","content"=>"contenido"]);
        $carrera->update(['descripcion'=>$request->descripcion,]);
        return redirect()->route('carreras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function destroy(carreras $carrera)
    {
        $carrera->delete();
        return redirect()->route('carreras.index');
    }
}
