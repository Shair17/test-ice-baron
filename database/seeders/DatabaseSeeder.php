<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  private $preguntas = [
    'Para superar las dificultades que se me presentan actúo paso a paso',
    'Es duro para mí disfrutar de la vida',
    'Prefiero un trabajo en el que se me diga casi todo lo que tengo que hacer',
    'Sé como enfrentar los problemas más desagradables',
    'Me agradan las personas que conozco',
    'Trato de valorar y darle el mejor sentido a mi vida',
    'Me resulta relativamente fácil expresar mis sentimientos',
    'Trato de ser realista, no me gusta fantasear ni soñar despierto(a)',
    'Reconozco con facilidad mis emociones',
    'Soy incapaz de demostrar afecto',

    'Me siento seguro(a) de mí mismo(a) en la mayoría de situaciones',
    'Tengo la sensación de que algo no está bien en mi cabeza',
    'Tengo problemas para controlarme cuando me enojo',
    'Me resulta difícil comenzar cosas nuevas',
    'Cuando enfrento una situación difícil me gusta reunir toda la información que pueda sobre ella.',
    'Me gusta ayudar a la gente',
    'Me es difícil sonreír',
    'Soy incapaz de comprender cómo se sienten los demás',
    'Cuando trabajo con otros tiendo a confiar más en sus ideas que en las mías',
    'Creo que puedo controlarme en situaciones muy difíciles',

    'Realmente no sé para que soy bueno(a)',
    'No soy capaz de expresar mis ideas',
    'Me es difícil compartir mis sentimientos más íntimos con los demás',
    'No tengo confianza en mí mismo(a)',
    'Creo que he perdido la cabeza',
    'Soy optimista en la mayoría de las cosas que hago',
    'Cuando comienzo a hablar me resulta difícil detenerme',
    'En general, me resulta difícil adaptarme',
    'Me gusta tener una visión general de un problema antes de intentar solucionarlo',
    'No me molesta aprovecharme de los demás, especialmente si se lo merecen',

    'Soy una persona bastante alegre y optimista',
    'Prefiero que otros tomen decisiones por mí',
    'Puedo manejar situaciones de estrés, sin ponerme demasiado nervioso',
    'Pienso bien de las personas',
    'Me es difícil entender cómo me siento',
    'He logrado muy poco en los últimos años',
    'Cuando estoy enojado(a) con alguien se lo puedo decir',
    'He tenido experiencias extrañas que no puedo explicar',
    'Me resulta fácil hacer amigos(as)',
    'Me tengo mucho respeto',

    'Hago cosas muy raras',
    'Soy impulsivo(a), y eso me trae problemas',
    'Me resulta difícil cambiar de opinión',
    'Soy bueno para comprender los sentimientos de las personas',
    'Lo primero que hago cuando tengo un problema es detenerme a pensar',
    'A la gente le resulta difícil confiar en mí',
    'Estoy contento(a) con mi vida',
    'Me resulta difícil tomar decisiones por mí mismo(a)',
    'No puedo soportar el estrés',
    'En mi vida no hago nada malo',

    'No disfruto lo que hago',
    'Me resulta difícil expresar mis sentimientos más íntimos',
    'La gente no comprende mi manera de pensar',
    'Generalmente espero lo mejor',
    'Mis amigos me confían sus intimidades',
    'No me siento bien conmigo mismo(a)',
    'Percibo cosas extrañas que los demás no ven',
    'La gente me dice que baje el tono de voz cuando discuto',
    'Me resulta fácil adaptarme a situaciones nuevas',
    'Cuando intento resolver un problema analizo todas las posibles soluciones y luego escojo la que considero mejor',

    'Me detendría y ayudaría a un niño que llora por encontrar a sus padres, aun cuando tuviese algo que hacer en ese momento',
    'Soy una persona divertida',
    'Para superar las dificultades que se me presentan actúo paso a paso',
    'Soy consciente de cómo me siento',
    'Siento que me resulta difícil controlar mi ansiedad',
    'Nada me perturba',
    'No me entusiasman mucho mis intereses',
    'Cuando estoy en desacuerdo con alguien soy capaz de decírselo',
    'Tengo tendencia a fantasear y a perder contacto con lo que ocurre a mi alrededor',
    'Me es difícil llevarme con los demás',

    'Me resulta difícil aceptarme tal como soy',
    'Me siento como si estuviera separado(a) de mi cuerpo',
    'Me importa lo que puede sucederle a los demás',
    'Soy impaciente',
    'Puedo cambiar mis viejas costumbres',
    'Me resulta difícil escoger la mejor solución cuando tengo que resolver un problema',
    'Si pudiera violar la ley sin pagar las consecuencias, lo haría en determinadas situaciones',
    'Me deprimo',
    'Sé cómo mantener la calma en situaciones difíciles',
    'Nunca he mentido',

    'En general me siento motivado(a) para continuar adelante, incluso cuando las cosas se ponen difíciles',
    'Trato de continuar y desarrollar aquellas cosas que me divierten',
    'Me resulta difícil decir “no” aunque tenga el deseo de hacerlo',
    'Me dejo llevar por mi imaginación y mis fantasías',
    'Mis relaciones más cercanas significan mucho, tanto para mí como para mis amigos',
    'Me siento feliz con el tipo de persona que soy',
    'Tengo reacciones fuertes, intensas, que son difíciles de controlar',
    'En general, me resulta difícil realizar cambios en mi vida cotidiana',
    'Soy consciente de lo que me está pasando, aun cuando estoy alterado(a)',
    'Para poder resolver una situación que se presenta, analizo todas las posibilidades existentes',

    'Soy capaz de respetar a los demás',
    'No estoy muy contento(a) con mi vida',
    'Prefiero seguir a otros a ser líder',
    'Me resulta difícil enfrentar las cosas desagradables de la vida',
    'Nunca he violado la ley',
    'Disfruto de las cosas que me interesan',
    'Me resulta relativamente fácil decirle a la gente lo que pienso',
    'Tiendo a exagerar',
    'Soy sensible ante los sentimientos de las otras personas',
    'Mantengo buenas relaciones con los demás',

    'Estoy contento(a) con mi cuerpo',
    'Soy una persona muy extraña',
    'Soy impulsivo(a)',
    'Me resulta difícil cambiar mis costumbres',
    'Considero que es muy importante ser un(a) ciudadano(a) que respeta la ley',
    'Disfruto las vacaciones y los fines de semana',
    'En general tengo una actitud positiva para todo, aun cuando surgen problemas',
    'Tengo tendencia a depender de otros',
    'Creo en mi capacidad para manejar los problemas más difíciles',
    'No me siento avergonzado(a) por nada de lo que he hecho hasta ahora',

    'Trato de aprovechar al máximo las cosas que me gustan y me divierten',
    'Los demás piensan que no me hago valer, que me falta firmeza',
    'Soy capaz de dejar de fantasear para volver a ponerme en contacto con la realidad',
    'Los demás opinan que soy una persona sociable',
    'Estoy contento(a) con la forma en que me veo',
    'Tengo pensamientos extraños que los demás no logran entender',
    'Me es difícil describir lo que siento',
    'Tengo mal carácter',
    'Por lo general, me trabo cuando pienso acerca de las diferentes maneras de resolver un problema',
    'Me es difícil ver sufrir a la gente',

    'Me gusta divertirme',
    'Me parece que necesito de los demás más de lo que ellos me necesitan',
    'Me pongo ansioso(a)',
    'No tengo días malos',
    'Intento no herir los sentimientos de los demás',
    'No tengo una buena idea de lo que quiero en la vida',
    'Me es difícil hacer valer mis derechos',
    'Me es difícil ser realista',
    'No mantengo relación con mis amistades',
    'Haciendo un balance de mis puntos positivos y negativos me siento bien conmigo mismo(a)',

    'Tengo una tendencia a explotar de cólera fácilmente',
    'Si me viera obligado(a) a dejar mi casa actual, me sería difícil adaptarme nuevamente',
    'En general, cuando comienzo algo nuevo tengo la sensación de que voy a fracasar',
    'He respondido sincera y honestamente a las frases anteriores',
  ];

  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    foreach ($this->preguntas as $pregunta) {
      \App\Models\Encuesta::create([
        'pregunta' => $pregunta
      ]);
    }
  }
}
