<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\editoriales;
use App\Models\categorias;
use App\Models\autores;

class AsignaLibrosController extends Controller
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

        $editoriales=editoriales::all();
        $categorias=categorias::all();
        $autores=autores::all();
        return view("Libros.nuevoslibros",compact("editoriales","categorias","autores"));
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
            "nombre_libro"=>"required|min:5|max:100|unique:libros",
            "id_editorial"=>"required",
            "anio_de_p"=>"required|Integer",
            "id_categoria"=>"required",
            "id_autor"=>"required"
        ],[],["name"=>"nombre","content"=>"contenido"]);
        Libros::create(['nombre_libro'=>$request->nombre_libro,
            'id_editorial'=>$request->id_editorial,
            'anio_de_p'=>$request->anio_de_p,
            'id_categoria'=>$request->id_categoria,
            'id_autor'=>$request->id_autor]);
        return redirect()->route('libros.index');
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
