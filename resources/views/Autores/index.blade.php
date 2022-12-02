@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="">
                    <h1 class="display-4 bg-dark text-light" style="">Autores</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-3 d-flex justify-content-center">
                        <a href="{{route('autores.create')}}" class="btn btn-success mb-3"> Nuevo Autor</a>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-10 d-flex justify-content-center">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre del autor</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Autores as $datos)
                                <tr>
                                    <th>{{$loop->index+1}}</th>
                                    <td>{{$datos->nombre_autor}}</td>
                                    <td>
                                        @can('editar-autor')
                                            <a class="btn btn-warning" href="{{route('autores.edit',$datos->id)}}"> Editar </a>
                                        @endcan
                                        @can('borrar-autor')
                                            <form action="{{route('autores.destroy',$datos->id)}}" method="post">
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
