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
                    <h1 class="display-4 bg-dark text-light text-center" style="">EDITAR EDITORIAL</h1>
                </div>
            </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-6 d-flex justify-content-center">
                <form action="{{route('editoriales.update',$editoriale->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row d-flex justify-content-center">
                        <label for="nombre">Nombre de la Editorial</label>
                        <input type="text" name="nombre" class="form-control @error('nombre')is-invalid @enderror" id="nombre" value="{{$editoriale->nombre}}">
                        @error('nombre')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="row d-flex justify-content-center mt-3">
                        <div class="col-6 d-flex justify-content-center">
                            <button class="btn btn-primary" type="submit">ACTUALIZAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection