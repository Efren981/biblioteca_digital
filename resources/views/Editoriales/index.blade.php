@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="">
                    <h1 class="display-4 bg-dark text-light" style="">Editoriales</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-3 d-flex justify-content-center">
                        <a href="{{route('editoriales.create')}}" class="btn btn-success mb-3"> Nueva Editorial</a>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-10 d-flex justify-content-center">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre Editorial</th>
                                <th>Descripcion</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($editoriales as $datos)
                                <tr>
                                    <th>{{$loop->index+1}}</th>
                                    <td>{{$datos->nombre}}</td>
                                    <td>{{$datos->descripcion}}</td>
                                    <td>
                                        @can('editar-editorial')
                                            <a class="btn btn-warning" href="{{route('editoriales.edit',$datos->id)}}"> Editar </a>
                                        @endcan
                                        @can('borrar-editoriales')
                                            <form action="{{route('editoriales.destroy',$datos->id)}}" method="post">
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