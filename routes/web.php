<?php

use App\Http\Controllers\EncuestaController;
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

Route::group(['middleware' => ["auth.basic"]], function () {
  Route::get('/encuesta', [EncuestaController::class, 'mostrar']);
  Route::get('/resultados', [EncuestaController::class, 'resultados'])->name('resultados');
  Route::post('/encuesta/guardar', 'App\Http\Controllers\EncuestaController@guardar')->name('encuesta.guardar');
});
