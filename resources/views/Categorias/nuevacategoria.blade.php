@section("content")
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <h1 class="text-center">Agregar nueva categoria</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-6 d-flex justify-content-center">
                <form action="{{url ('nuevacategoria')}}" method="POST">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <label for="Nombre_categoria">Nombre de la categoria</label>
                        <input type="text" name="Nombre_categoria" class="form-control @error('Nombre_categoria')is-invalid @enderror" id="Nombre_categoria" value="{{old('Nombre_categoria')}}">
                        @error('Nombre_categoria')
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