@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

              <div class="card-body">
                  <h1 class="text-center">Instrucciones Test Ice Baron</h1>
                  <p class="text-center">Usted encontrará 133 afirmaciones sobre maneras de sentir, pensar o actuar. Léalas atentamente y decida en qué medida cada una describe o no su verdadero modo de ser.</p>

                  <br>

                  <p>Hay cinco posibles respuestas para cada frase:</p>

                  <ul class="list-group">
                    <li class="list-group-item">1. Rara Vez o Nunca</li>
                    <li class="list-group-item">2. Pocas Veces</li>
                    <li class="list-group-item">3. Algunas veces</li>
                    <li class="list-group-item">5. Muchas veces</li>
                    <li class="list-group-item">5. Muy Frecuentemente o Siempre</li>
                  </ul>

                  <br>

                  <p>Una vez decidida su respuesta, usted deberá seleccionar el número correspondiente a su respuesta:</p>

                  <p>Si alguna de las frases no tiene nada que ver con usted, igualmente responda teniendo en cuenta cómo se sentiría, pensaría o actuaría si estuviera en esa situación.</p>

                  <p>No hay respuestas "correctas" o "incorrectas", ni respuestas "buenas" o "malas". <strong>Responda honesta y sinceramente</strong> de acuerdo a cómo es usted, no según cómo le gustaría ser ni cómo le gustaría que otros lo(a) vieran.</p>

                  <p>No hay límite de tiempo, pero trabaje con rapidez y asegúrese de responder <strong>todas</strong> las frases.</p>

                  <div class="d-grid">
                    <a href="/encuesta" class="btn btn-primary btn-block" type="button">Empezar</a>
                  </div>

                  @if (session('status'))
                    <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                    </div>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
