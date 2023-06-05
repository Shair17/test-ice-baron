<?php

use App\Models\Encuesta;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
})->middleware('auth');

Auth::routes();

Route::get('/encuesta', function () {
  $encuestas  = Encuesta::get();
  return view('encuesta', compact('encuestas'));
})->middleware('auth');

Route::post('/encuesta/guardar', 'App\Http\Controllers\EncuestaController@guardar')->name('encuesta.guardar');
