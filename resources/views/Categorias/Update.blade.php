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
                    <h1 class="display-4 bg-dark text-light text-center" style="">EDITAR CATEGORIA</h1>
                </div>
            </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-6 d-flex justify-content-center">
                <form action="{{route('categorias.update',$categoria->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row d-flex justify-content-center">
                        <label for="Nombre_categoria">Nombre de la categoria</label>
                        <input type="text" name="Nombre_categoria" class="form-control @error('Nombre_categoria')is-invalid @enderror" id="Nombre_categoria" value="{{old('Nombre_categoria')}}">
                        @error('Nombre_categoria')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="row d-flex justify-content-center mt-3">
                        <div class="col-6 d-flex justify-content-center">
                            <button class="btn btn-primary" type="submit">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection