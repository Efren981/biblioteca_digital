<?php
namespace App\Http\Controllers;

use App\Models\autores;
use App\Models\carreras;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Autores=Autores::all();
        return view('Autores.index',compact('Autores'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Autores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            "nombre_autor"=>"required|min:3|max:100|unique:autores",
        ],[],["name"=>"nombre_autor","content"=>"contenido"]);
        Autores::Create(['nombre_autor'=>$request->nombre_autor,]);
        return redirect()->route('autores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function show(autores $autores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function edit(autores $autore)
    {
        return view('Autores.update',compact('autore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autores $autore)
    {
        $request->validate([
            "nombre_autor"=>"required|min:5|max:100|unique:autores",
        ],[],["name"=>"nombre_autor","content"=>"contenido"]);
        $autore->update(['nombre_autor'=>$request->nombre_autor,]);
        return redirect()->route('autores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function destroy(autores $autore)
    {
        $autore->delete();
        return redirect()->route('autores.index');
    }
}
