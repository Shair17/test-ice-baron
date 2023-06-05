<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
  use HasFactory;

  protected $fillable = [
    'pregunta'
  ];

  public function respuestas()
  {
    return $this->hasMany(Respuesta::class);
  }

  public function get_answer($user_id)
  {
    $res = Respuesta::where('encuesta_id', $this->id)
      ->where('user_id', $user_id)->first();
    if (empty($res)) {
      return "";
    }
    return $res->respuesta;
  }
}
