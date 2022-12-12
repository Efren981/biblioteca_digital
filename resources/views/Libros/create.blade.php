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
                    <h1 class="display-4 bg-dark text-light text-center" style="">AGREGAR LIBRO</h1>
                </div>
            </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-7 d-flex justify-content-center">
                <form action="{{url ('libros')}}" method="POST">
                    @csrf
                    
                    <div class="row d-flex justify-content-center">
                        <label for="nombre_libro">Nombre del libro</label>
                        <input type="text" name="nombre_libro" class="form-control @error('nombre_libro')is-invalid @enderror" id="nombre_libro" value="{{old('nombre_libro')}}">
                        @error('nombre_libro')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="row d-flex justify-content-center">
                        <label for="numero_libro">Numero del Libro</label>
                        <input type="text" name="numero_libro" class="form-control @error('numero_libro')is-invalid @enderror" id="numero_libro" value="{{old('numero_libro')}}">
                        @error('numero_libro')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="row d-flex justify-content-center mt-3">
                        <label for="anio_de_p">Año de Publicación</label>
                        <input type="text" name="anio_de_p" class="form-control @error('anio_de_p')is-invalid @enderror" id="anio_de_p" value="{{old('anio_de_p')}}">
                        @error('anio_de_p')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="row d-flex justify-content-center mt-3">
                        <label>Editorial</label>
                        <select name="id_editorial" id="id_editorial">
                            <option selected="0">Seleciona una opcion</option>
                            @foreach($editoriales as $editorial)
                                <option value="{{$editorial->id}}">{{$editorial->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row d-flex justify-content-center mt-3">
                        <label>Carrera</label>
                        <select name="id_carrera" id="id_carrera">
                            <option selected="0">Selecciona una opcion</option>
                            @foreach($carreras as $carrera)
                                <option value="{{$carrera->id}}">{{$carrera->descripcion}}</option>
                        @endforeach
                        </select>
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