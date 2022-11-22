<?php

namespace App\Http\Controllers;

use App\Models\editoriales;
use Illuminate\Http\Request;

class EditorialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoriales=editoriales::all();
        return view('Editoriales.index',compact('editoriales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Editoriales.create');
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
            "nombre"=>"required|min:5|max:100|unique:editoriales",
        ],[],["name"=>"nombre","content"=>"contenido"]);
        Editoriales::create(['nombre'=>$request->nombre,]);
        return redirect()->route('editoriales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\editoriales  $editoriales
     * @return \Illuminate\Http\Response
     */
    public function show(editoriales $editoriales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\editoriales  $editoriales
     * @return \Illuminate\Http\Response
     */
    public function edit(editoriales $editoriale)
    {
        return view('Editoriales.update',compact('editoriale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\editoriales  $editoriales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, editoriales $editoriale)
    {
        $request->validate([
            "nombre"=>"required|min:5|max:100|unique:editoriales",
        ],[],["name"=>"nombre","content"=>"contenido"]);
        $editoriale->update(['nombre'=>$request->nombre,]);
        return redirect()->route('editoriales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\editoriales  $editoriales
     * @return \Illuminate\Http\Response
     */
    public function destroy(editoriales $editoriale)
    {
        $editoriale->delete();
        return  redirect()->route('editoriales.index');
    }
}
