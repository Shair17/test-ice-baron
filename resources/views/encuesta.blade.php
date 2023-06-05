@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('encuesta.guardar') }}" method="POST">
            @csrf
            @foreach($encuestas as $encuesta)
              <div class="mb-3">
                <p class="fs-5">{{ $encuesta->pregunta }}</p>

                @php
                $opciones = [
                    'Rara Vez o Nunca',
                    'Pocas Veces',
                    'Algunas veces',
                    'Muchas veces',
                    'Muy Frecuentemente o Siempre'
                ];
                @endphp

                @foreach($opciones as $indice => $opcion)
                <div class="form-check">
                  <label class="form-check-label" for="encuesta_{{$encuesta->id}}_{{$indice}}">{{$opcion}}</label>

                  @if ($encuesta->get_answer(Auth::user()->id) == $indice)
                  <input class="form-check-input" type="radio" id="encuesta_{{$encuesta->id}}_{{$indice}}" name="encuesta_{{$encuesta->id}}" value="{{$indice}}" checked>
                  @else
                  <input class="form-check-input" type="radio" id="encuesta_{{$encuesta->id}}_{{$indice}}" name="encuesta_{{$encuesta->id}}" value="{{$indice}}">
                  @endif
                </div>
                @endforeach
              </div>
            @endforeach

            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg">Enviar respuestas</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
