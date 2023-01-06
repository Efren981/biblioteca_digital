<?php

namespace App\Http\Controllers;

use App\Models\libros;
use Illuminate\Http\Request;
use App\Models\editoriales;
use App\Models\Categorias;
use App\Models\autores;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
     SELECT libros.id,
            libros.nombre_libro,
            libros.numero_libro,
            carreras.descripcion,
            editoriales.nombre,
            libros.anio_de_p
    from libros
    INNER JOIN carreras on carreras.id=libros.id_carrera
    INNER JOIN editoriales on editoriales.id=libros.id_editorial;

    SELECT libros.id,
           libros.nombre_libro,
           editoriales.nombre,
           libros.anio_de_p,
           autores.nombre_autor
           categorias.nombre_categoria
    from libros
    INNER JOIN categorias on categorias.id=libros.id_categoria;
    INNER JOIN editoriales on editoriales.id=libros.id_editoriales
    INNER JOIN autores on autores.id=libros.id_autores;







     */
    public function index()
    {
        $libros=libros::join("editoriales", "editoriales.id","=","libros.id_editorial")
            ->join("autores", "autores.id","=","libros.id_autor")
            ->join("categorias","categorias.id","=","libros.id_categoria")
            ->select("libros.id", "libros.nombre_libro", "editoriales.nombre","libros.anio_de_p", "autores.nombre_autor", )
            ->orderby("libros.id")
            ->get();
        return view('Libros.index',compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $editoriales=editoriales::all();
        $categorias=Categorias::all();
        $autores=autores::all();
        return view("Libros.create",compact('editoriales',"categorias","autores"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
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
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show(libros $libros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit(libros $libro)
    {
        $editoriales=editoriales::all();
        $categorias=categorias::all();
        $autores=autores::all();
        return view("Libros.update",compact('libro','editoriales',"categorias","autores"));;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, libros $libro)
    {
        $request->validate([
            "nombre_libro"=>"required|min:5|max:100|unique:libros",
            "id_editorial"=>"required",
            "anio_de_p"=>"required|Integer",
            "id_categoria"=>"required",
            "id_autor"=>"required"
        ],[],["name"=>"nombre","content"=>"contenido"]);
        $libro::create(['nombre_libro'=>$request->nombre_libro,
            'id_editorial'=>$request->id_editorial,
            'anio_de_p'=>$request->anio_de_p,
            'id_categoria'=>$request->id_categoria,
            'id_autor'=>$request->id_autor]);
        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy(libros $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index');
    }
}