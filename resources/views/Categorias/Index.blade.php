@extends('layouts.app')

@section("Categorias")
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
                    <h1 class="display-4 bg-dark text-light text-center" style="">CATEGORIAS</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-3 d-flex justify-content-center">
                        <a href="{{route('categorias.create')}}" class="btn btn-success mb-3"> NUEVA CATEGORIA</a>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-10 d-flex justify-content-center">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre Categoria</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categorias as $datos)
                                <tr>
                                    <th>{{$loop->index+1}}</th>
                                    <td>{{$datos->Nombre_categoria}}</td>

                                    <td>
                                        @can('editar-categoria')
                                            <a class="btn btn-warning m-2" href="{{route('categorias.edit',$datos->id)}}"> Editar </a>
                                        @endcan
                                        @can('borrar-categorias')
                                            <form action="{{route('categorias.destroy',$datos->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger m-2" type="submit"> Borrar </button>
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