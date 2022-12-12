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
        <div class="row ">
            <div class="col-md-12 text-center " style="">
                <h1 class="display-4 text-center bg-dark text-light " style="">CARRERAS</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="row d-flex justify-content-center">
                <div class="col-3 d-flex justify-content-center">
                    <a href="{{route('carreras.create')}}" class="btn btn-success mb-3"> NUEVA CARRERA</a>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-10 d-flex justify-content-center">
                <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Nombre de la carrera</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($carreras as $datos)
                <tr>
                  <th>{{$loop->index+1}}</th>
                  <td>{{$datos->descripcion}}</td>
                  <td>
                    @can('editar-carrera')
                      <a class="btn btn-warning" href="{{route('carreras.edit',$datos->id)}}"> Editar </a>
                      @endcan
                      @can('borrar-carrera')
                      <form action="{{route('carreras.destroy',$datos->id)}}" method="post">
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
