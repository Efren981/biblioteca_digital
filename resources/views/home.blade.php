@extends('layouts.app')

@section('content')
<body 
  style="background-color:#95EEE1;">
</body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BIENVENIDO A LA BIBLIOTECA DIGITAL TESVB') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('El acervo bibliográfico que ofrece el Tecnológico de Estudios Superiores de Valle de Bravo, es el soporte necesario para el desarrollo del alumno, que influye en el conocimiento personal y colectivo para la toma de decisiones.

De forma anual se adquiere una cantidad considerable de bibliografía que permite fortalecer las actividades de investigación en los estudiantes.
La adquisición del año 2014 ascendió a 778 volúmenes de 320 títulos de las diferentes carreras.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
