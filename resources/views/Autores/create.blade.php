@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <h1 class="text-center">Agregar nuevo autor</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-6 d-flex justify-content-center">
                <form action="{{url ('autores')}}" method="POST">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <label for="nombre_autor">Nombre del autor</label>
                        <input type="text" name="nombre_autor" class="form-control @error('nombre_autor')is-invalid @enderror" id="nombre_autor" value="{{old('nombre_autor')}}">
                        @error('nombre_autor')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="row d-flex justify-content-center mt-3">
                        <div class="col-6 d-flex justify-content-center">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
