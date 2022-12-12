@extends('layouts.app')

@section("usuarios")
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
                    <h1 class="display-4 bg-dark text-light text-center" style="">REGISTRAR USUARIO</h1>
                </div>
            </div>
</div>
</div>
<div class="py-4">
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
                  <label for="password">Contraseña</label>
                  {!! Form::password('password', array('class' => 'form-control')) !!}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <label for="confirm-password">Confirmar Contraseña</label>
                  {!! Form::password('confirm-password', array('class' => 'form-control')) !!}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <label for="">Roles</label>
                  {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
              </div>
          </div>
          <div class="gap-2 justify-content-center">
              <button type="submit" class="btn btn-primary justify-content-center">Guardar</button>
          </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
</div>
@endsection


