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
                    <h1 class="display-4 bg-dark text-light text-center" style="">PRESTAMOS</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-3 d-flex justify-content-center">
                        <a href="{{route('prestamos.create')}}" class="btn btn-success mb-3"> NUEVO PRESTAMO</a>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-10 d-flex justify-content-center">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Usuario</th>
                                <th>Libro</th>
                                <th>Fecha prestamo</th>
                                <th>Fecha devolucion</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($prestamos as $datos)
                                <tr>
                                    <th>{{$loop->index+1}}</th>
                                    <td>{{$datos->name}}</td>
                                    <td>{{$datos->nombre_libro}}</td>
                                    <td>{{$datos->fecha_prestamo}}</td>
                                    <td>{{$datos->fecha_entrega}}</td>
                                    <td>

                                        @can('editar-prestamos')
                                            <a class="btn btn-warning" href="{{route('prestamos.edit',$datos->id)}}"> Editar </a>
                                        @endcan
                                        @can('borrar-prestamos')
                                            <form action="{{route('prestamos.destroy',$datos->id)}}" method="post">
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


