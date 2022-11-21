@extends('layouts.app')

@section("usuarios")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-8 d-flex justify-content-center">
          <h1 class="text-center">Tabla Usuarios<br></h1>
        </div>
      </div>
        <div class="col-md-12 text-center">
          @can('crear-usuario')
          <a class="btn btn-success mb-3" href="{{route('usuarios.create')}}" > Nuevo registro</a>@endcan
        </div>
      <div class="row d-flex justify-content-center">
        <div class="col-9 d-flex justify-content-center">
          <div class="table-responsive">
            <table class="table table-bordered ">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Rol</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($usuarios as $datos)
                <tr>
                  <th>{{$loop->index+1}}</th>
                  <td>{{$datos->name}}</td>
                  <td>{{$datos->email}}</td>
                  <td>@if(!empty($datos->getRoleNames()))
                        @foreach($datos->getRoleNames() as $rolName)
                        <h5>{{$rolName}}</h5>
                        @endforeach
                      @endif
                </td>
                  <td>
                    @can('editar-usuario')
                      <a class="btn btn-warning" href="{{route('usuarios.edit',$datos->id)}}"> Editar</a>@endcan
                      @can('borrar-usuario')
                      <form method="POST" action="{{route('usuarios.destroy',$datos->id)}}">
                        @csrf
                        @method('DELETE')
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
  </div>
@endsection
