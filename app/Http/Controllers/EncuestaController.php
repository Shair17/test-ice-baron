<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use App\Models\Respuesta;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
  public function mostrar()
  {
    $encuestas = Encuesta::paginate(5);

    return view('encuesta', compact('encuestas'));
  }

  public function guardar(Request $request)
  {
    $respuestas = $request->all();

    foreach ($respuestas as $key => $respuesta) {
      if (strpos($key, "encuesta_") !== false) {
        $encuestaId = str_replace("encuesta_", "", $key);

        Respuesta::updateOrCreate(
          [
            'encuesta_id' => $encuestaId,
            'user_id' => auth()->id()
          ],
          [
            'respuesta' => $respuesta
          ]
        );
      }
    }

    return redirect()->route('resultados')->with('success', 'Respuestas guardadas exitosamente.');
  }

  public function resultados()
  {
    $encuestas = Encuesta::all();
    $opciones = [
      'Rara Vez o Nunca',
      'Pocas Veces',
      'Algunas veces',
      'Muchas veces',
      'Muy Frecuentemente o Siempre'
    ];
    return view('resultados', compact('encuestas', 'opciones'));
  }
}
