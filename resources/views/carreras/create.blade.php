@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
<body 
  style="background-color:#95EEE1;">
</body>
<div class="container">
            <div class="row">
                <div class="col-md-12" style="">
                    <h1 class="display-4 bg-dark text-light text-center" style="">AGREGAR CARRERA</h1>
                </div>
            </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-6 d-flex justify-content-center">
                <form action="{{url ('carreras')}}" method="POST">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <label for="desc">Nombre de la carrera</label>
                        <input type="text" name="descripcion" class="form-control @error('descripcion')is-invalid @enderror" id="descripcion" value="{{old('descripcion')}}">
                        @error('descripcion')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="row d-flex justify-content-center mt-3">
                        <div class="col-6 d-flex justify-content-center">
                            <button class="btn btn-primary" type="submit">GUARDAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
