@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <x-alert></x-alert>

      <div class="card">
        <div class="card-body">
          <h1 class="text-center">Test ICE de Baron</h1>

          <div class="row">
            <div class="col-md-6">
              {{-- <strong>{{ Auth::user() }}</strong> --}}
              <p class="title">Hoja de Resultados del Iventario Emocional ICE de Baron</p>

              <div class="mt-4">
                <div class="row">
                  <label>Nombre(s) y Apellidos</label>
                  <strong>{{ Auth::user()->name }}</strong>
                </div>

                <div class="row mt-1">
                  <label>Correo electrónico</label>
                  <strong>{{ Auth::user()->email }}</strong>
                </div>

                <div class="row mt-1">
                  <label>Fecha de Nacimiento</label>
                  <strong>{{ Auth::user()->birthday }}</strong>
                </div>

                <div class="row mt-1">
                  <label>Género</label>
                  <strong>{{ Auth::user()->gender }}</strong>
                </div>

                <div class="row mt-1">
                  <label>Fecha de aplicación</label>
                  <strong>{{ Auth::user()->created_at }}</strong>
                </div>

                <div class="row mt-1">
                  <label>Edad</label>
                  <strong>{{ Auth::user()->birthday }}</strong>
                </div>

                <div class="row mt-1">
                  <label>Género</label>
                  <strong>{{ Auth::user()->gender }}</strong>
                </div>

                <div class="row mt-1">
                  <label>Ocupación</label>
                  <strong>Estudiante</strong>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <p>Hoja de Resultados del Iventario Emocional ICE de Baron</p>

              <div class="mt-4">
                <table class="table">
                  <tr>
                      <td>GENERAL</td>
                      <td >79</td>
                      <td >PROMEDIO</td>
                  </tr>
                  <tr>
                      <td>Optimismo (OP)</td>
                      <td>9</td>
                      <td >Promedio</td>
                  </tr>
                  <tr>
                      <td>Felicidad (FE)</td>
                      <td>61</td>
                      <td>Promedio</td>
                  </tr>
                  <tr>
                      <td>ESTADO DE ANIMO G</td>
                      <td>30</td>
                      <td >PROMEDIO</td>
                  </tr>
                  <tr>
                      <td>Control de Impulsos (CI)</td>
                      <td>152</td>
                      <td >Muy alto</td>
                  </tr>
                  <tr>
                      <td>Tolerancia al Estrés</td>
                      <td>74</td>
                      <td>Promedio</td>
                  </tr>
                  <tr>
                      <td>MANEJO DEL ESTRÉS</td>
                      <td>115</td>
                      <td>ALTO</td>
                  </tr>
                  <tr>
                      <td>Flexibilidad (FL)</td>
                      <td>140</td>
                      <td>Alto</td>
                  </tr>
                  <tr>
                      <td>Prueba de la Realidad (PR)</td>
                      <td>107</td>
                      <td>Alto</td>
                  </tr>
                  <tr>
                      <td>Solución de Problemas (SP)</td>
                      <td>55</td>
                      <td>Promedio</td>
                  </tr>
                  <tr>
                      <td>ADAPTABILIDAD</td>
                      <td>102</td>
                      <td>PROMEDIO</td>
                  </tr>
                  <tr>
                      <td>Responsabilidad Social (RS)</td>
                      <td>23</td>
                      <td>Promedio</td>
                  </tr>
                  <tr>
                      <td>Relaciones Interpersonales (RI)</td>
                      <td>50</td>
                      <td>Bajo</td>
                  </tr>
                  <tr>
                      <td>Empatia (EM)</td>
                      <td>2</td>
                      <td>Promedio</td>
                  </tr>
                  <tr>
                      <td>INTERPERSONAL</td>
                      <td>29</td>
                      <td>BAJO</td>
                  </tr>
                  <tr>
                      <td>Independencia (IN)</td>
                      <td>129</td>
                      <td>Promedio</td>
                  </tr>
                  <tr>
                      <td>Autorrealizacion (AR)</td>
                      <td>77</td>
                      <td>Promedio</td>
                  </tr>
                  <tr>
                      <td>Autoconcepto (AC)</td>
                      <td>58</td>
                      <td>Promedio</td>
                  </tr>
                  <tr>
                      <td>Asertividad (AS)</td>
                      <td>94</td>
                      <td>Promedio</td>
                  </tr>
                  <tr>
                      <td>Comprensión de si mismo (CM)</td>
                      <td>84</td>
                      <td>Bajo</td>
                  </tr>
                  <tr>
                      <td>INTRAPERSONAL</td>
                      <td>82</td>
                      <td>PROMEDIO</td>
                  </tr>
              </table>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <p class="title">PERFIL GRÁFICODE LA PRUEBA DE INVENTARIO EMOCIONAL ICE DE BARON</p>

              <div class="mt-4">
                <div>
                  <p class="mb-1">GENERAL</p>

                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 79%" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100">79%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Optimismo (OP)</p>

                  <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-label="Info example" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100">9%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Felicidad (FE)</p>

                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-label="Warning example" style="width: 61%" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100">61%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">ESTADO DE ANIMO G</p>

                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-label="Danger example" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Control de Impulsos (CI)</p>

                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 152%" aria-valuenow="152" aria-valuemin="0" aria-valuemax="100">152%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Tolerancia al Estrés</p>

                  <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-label="Info example" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100">74%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">MANEJO DEL ESTRÉS</p>

                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-label="Warning example" style="width: 115%" aria-valuenow="115" aria-valuemin="0" aria-valuemax="100">115%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Flexibilidad (FL)</p>

                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-label="Danger example" style="width: 140%" aria-valuenow="140" aria-valuemin="0" aria-valuemax="100">140%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Prueba de la Realidad (PR)</p>

                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 107%" aria-valuenow="107" aria-valuemin="0" aria-valuemax="100">107%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Solución de Problemas (SP)</p>

                  <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-label="Info example" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">ADAPTABILIDAD</p>

                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 102%" aria-valuenow="102" aria-valuemin="0" aria-valuemax="100">102%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Responsabilidad Social (RS)</p>

                  <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-label="Info example" style="width: 23%" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100">23%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Relaciones Interpersonales (RI)</p>

                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-label="Warning example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Empatia (EM)</p>

                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-label="Danger example" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100">2%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">INTERPERSONAL</p>

                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100">29%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Independencia (IN)</p>

                  <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-label="Info example" style="width: 129%" aria-valuenow="129" aria-valuemin="0" aria-valuemax="100">129%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Autorrealizacion (AR)</p>

                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">77%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Autoconcepto (AC)</p>

                  <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-label="Info example" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">58%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Asertividad (AS)</p>

                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-label="Warning example" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100">94%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">Comprensión de si mismo (CM)</p>

                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-label="Danger example" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100">84%
                    </div>
                  </div>
                </div>

                <div class="mt-2">
                  <p class="mb-1">INTRAPERSONAL</p>

                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82%
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- <div class="row">
            @foreach($encuestas as $encuesta)
              <div class="col-md-6">{{ $encuesta->pregunta }}</div>
              <div class="col-md-6">{{ $opciones[$encuesta->get_answer(Auth::user()->id)]}}</div>
            @endforeach
          </div> --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
