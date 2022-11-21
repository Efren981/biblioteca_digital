@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Cargar Rol</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
             @if ($errors->any())                                                
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>¡Revise los campos!</strong>                        
                    @foreach ($errors->all() as $error)                                    
                        <span class="badge badge-danger">{{ $error }}</span>
                    @endforeach                        
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
             @endif
          {!! Form::open(array('route'=>'roles.store','method'=>'POST'))!!}
      @csrf
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <label for="">Nombre del rol</label>
                  {!! Form::text('name',null,array('class'=>'form-control')) !!}
              </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <label for="email">Permisos</label><br/>
                  @foreach($permission as $value)
                        <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                        {{ $value->name }}</label>
                        <br/>
                  @endforeach
              </div>
          </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary mt-4">Guardar</button>
              </div>
          </div>
      </div>
      {!! Form::close()!!}
        </div>
      </div>
    </div>
  </div>
@endsection
