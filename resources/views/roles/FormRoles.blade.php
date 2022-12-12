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
                    <h1 class="display-4 bg-dark text-light text-center" style="">ROLES</h1>
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
              <div class="col-xs-12 col-sm-12 col-md-12 justify-content-center">
                <button type="submit" class="btn btn-primary mt-4 justify-content-center  ">Guardar</button>
              </div>
          </div>
      </div>
      {!! Form::close()!!}
        </div>
      </div>
    </div>
  </div>
@endsection
