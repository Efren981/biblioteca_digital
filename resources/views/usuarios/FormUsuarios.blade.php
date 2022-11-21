@extends('layouts.app')

@section("usuarios")
    active
@endsection
@section("content")
<div class="py-5">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center"><b class="text-center">Agregar Usuario</b></h1>
    </div>
  </div>
</div>
</div>
<div class="py-5">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @if ($errors->any())                                                
          <div class="alert alert-dark alert-dismissible fade show" role="alert">
          <strong>¡Revise los campos!</strong>                        
              @foreach ($errors->all() as $error)                                    
                  <span class="badge badge-danger">{{ $error }}</span>
              @endforeach                        
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>
      @endif

      {!! Form::open(array('route' => 'usuarios.store','method'=>'POST')) !!}
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <label for="name">Nombre</label>
                  {!! Form::text('name', null, array('class' => 'form-control')) !!}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <label for="email">E-mail</label>
                  {!! Form::text('email', null, array('class' => 'form-control')) !!}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <label for="password">Password</label>
                  {!! Form::password('password', array('class' => 'form-control')) !!}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <label for="confirm-password">Confirmar Password</label>
                  {!! Form::password('confirm-password', array('class' => 'form-control')) !!}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <label for="">Roles</label>
                  {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
</div>
@endsection


