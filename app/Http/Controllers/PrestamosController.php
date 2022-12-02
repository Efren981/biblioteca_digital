?php

namespace App\Http\Controllers;

use App\Models\prestamos;
use Illuminate\Http\Request;
use App\Models\libros;
use App\Models\User;


class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*
      SELECT prestamos.id, libros.nombre_libro, prestamos.fecha_prestamo, prestamos.fecha_entrega
      FROM prestamos, libros WHERE prestamos.id_libro=libros.id;

     SELECT prestamos.id,
    users.name,
    libros.nombre_libro,
    prestamos.fecha_prestamo,
    prestamos.fecha_entrega
    FROM libros
    INNER JOIN prestamos on prestamos.id_libro=libros.id;


     */
    public function index()
    {
        $prestamos=prestamos::join("libros", "prestamos.id_libro","=","libros.id")
            ->join("users", "prestamos.id_user","=","users.id")
            ->select("prestamos.id", "users.name","libros.nombre_libro", "prestamos.fecha_prestamo", "prestamos.fecha_entrega" )
            ->orderby("prestamos.id")
            ->get();
        return view('Prestamos.index',compact('prestamos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prestamos=prestamos::all();
        $libros=libros::all();
        $user=user::all();
        return view("Prestamos.create",compact('prestamos',"libros",'user'));
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
            "name"=>"required",
            "nombre_libro"=>"required|min:5|max:100|unique:libros",
            "fecha_prestamo"=>"required",
            "fecha_entrega"=>"required",

        ],[],["name"=>"nombre","content"=>"contenido"]);
        Prestamos::create(['name'=>$request->name,
            'nombre_libro'=>$request->nombre_libro,
            'fecha_prestamo'=>$request->fecha_prestamo,
            'fecha_entrega'=>$request->fecha_entrega,]);

        return redirect()->route('prestamos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function show(prestamos $prestamos)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function edit(prestamos $prestamo)
    {
        $prestamos=prestamos::all();
        $user=user::all();
        $libros=libros::all();
        return view('prestamos,update',compact('prestamo','libros','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prestamos $prestamos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function destroy(prestamos $prestamos)
    {
        //
    }
}
