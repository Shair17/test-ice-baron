@extends('layouts.app')

@section('content')
<div class="container">
  <form action="{{ route('encuesta.guardar') }}" method="POST">
    @csrf
    @foreach($encuestas as $encuesta)
        <h3>{{ $encuesta->pregunta }}</h3>
        <input type="text" name="respuestas[{{ $encuesta->id }}]">
    @endforeach
    <button type="submit">Enviar respuestas</button>
  </form>
</div>
@endsection
