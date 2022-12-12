@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <h1 class="text-center">Agregar nuevo Libro</h1>
            </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-7 d-flex justify-content-center">
                <form action="{{url ('libros')}}" method="POST">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 d-flex justify-content-center">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <label for="nombre_libro">Nombre del libro</label>
                        <input type="text" name="nombre_libro" class="form-control @error('nombre_libro')is-invalid @enderror" id="nombre_libro" value="{{old('nombre_libro')}}">
                        @error('nombre_libro')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="row d-flex justify-content-center mt-3">
                        <div class="col-10 d-flex justify-content-center">
                            <label>Editorial</label>
                            <select name="id_editorial" id="id_editorial">
                                <option selected="0">Selecciona una opcion</option>
                                @foreach($editoriales as $editorial)
                                    <option value="{{$editorial->id}}">{{$editorial->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <a href="/editoriala/create" class="btn btn-primary">AGREGAR</a>
                        </div>
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
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection