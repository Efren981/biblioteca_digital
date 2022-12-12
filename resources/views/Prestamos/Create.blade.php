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
                    <h1 class="display-4 bg-dark text-light text-center" style="">NUEVO PRESTAMO</h1>
                </div>
            </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-6 d-flex justify-content-center">
                <form action="{{url ('prestamos')}}" method="POST">
                    @csrf
                    

                    <div class="row d-flex justify-content-center mt-3">
                        <label>Usuarios</label>
                        <select name="id_user" id="id_user">
                            <option selected="0">Seleciona una opcion</option>
                            @foreach($user as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row d-flex justify-content-center mt-3">
                        <label>Libro</label>
                        <select name="id_libro" id="id_libro">
                            <option selected="0">Seleciona una opcion</option>
                            @foreach($libros as $libro)
                                <option value="{{$libro->id}}">{{$libro->nombre_libro}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <label for="fecha_prestamo">Fecha Prestamos</label>
                        <input type="date" name="fecha_prestamo" class="form-control @error('fecha_prestamo')is-invalid @enderror" id="fecha_prestamo" value="{{old('fecha_prestamo')}}">
                        @error('fecha_prestamo')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="row d-flex justify-content-center mt-3">
                        <label for="fecha_entrega">Fecha de Entrega</label>
                        <input type="date" name="fecha_entrega" class="form-control @error('fecha_entrega')is-invalid @enderror" id="fecha_entrega" value="{{old('fecha_entrega')}}">
                        @error('fecha_entrega')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 d-flex justify-content-center">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection