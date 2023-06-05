<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
  use HasFactory;

  public function encuesta()
  {
    return $this->belongsTo(Encuesta::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
