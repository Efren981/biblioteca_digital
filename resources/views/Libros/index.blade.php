@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
<body 
  style="background-color:#95EEE1;">
</body>
    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="">
                    <h1 class="display-4 bg-dark text-light text-center" style="">LIBROS</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-3 d-flex justify-content-center">
                        <a href="{{route('libros.create')}}" class="btn btn-success mb-3"> NUEVO LIBRO</a>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-10 d-flex justify-content-center">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre Editorial</th>
                                <th>Numero Libro</th>
                                <th>Carrera</th>
                                <th>Editorial</th>
                                <th>Año publicacion</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($libros as $datos)
                                <tr>
                                    <th>{{$loop->index+1}}</th>
                                    <td>{{$datos->nombre_libro}}</td>
                                    <td>{{$datos->numero_libro}}</td>
                                    <td>{{$datos->descripcion}}</td>
                                    <td>{{$datos->nombre}}</td>
                                    <td>{{$datos->anio_de_p}}</td>
                                    <td>

                                        @can('editar-libro')
                                            <a class="btn btn-warning" href="{{route('libros.edit',$datos->id)}}"> Editar </a>
                                        @endcan
                                        @can('borrar-libros')
                                            <form action="{{route('libros.destroy',$datos->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" type="submit"> Borrar </button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection
