<?php

namespace Database\Seeders;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exams = Exam::factory(10)->create();

        foreach ($exams as $exam) {
            Question::factory(10)->create([
                'exam_id' => $exam->id,
            ]);
        }
        /* Exam::create([
            'name' => 'Cuestionario Caracterológico de Gastón Berger',
            'slug' => Str::slug('Cuestionario Caracterológico de Gastón Berger'),
            'description' => 'INSTRUCCIONES: A continuación Ud encontrará un grupo de preguntas, al final de cada grupo encontrará una letra (a o b).
            Debe elegir la respuesta que mejor describa una característica tuya y colocar el número de la opción en el casillero de la izquierda.
            De esta manera responderás a todas las preguntas. Se lo más sincero posible; y recuerda que de ello depende el mejor conocimiento de tú carácter.',
            'user_id' => 1
        ]);

        Exam::create([
            'name' => 'Inventario de Hábitos de Estudios CASM-85',
            'slug' => Str::slug('Inventario de Hábitos de Estudios CASM-85'),
            'description' => 'Este es un inventario de hábitos de estudios, que le permitirá conocer las formas dominantes de trabajo en su vida académica. Para ello sólo debe poner una "X" en el cuadro que mejor describa su caso en particular. 
            Procure no contestar según lo que debería hacer o hacen sus compañeros, sino de la forma como usted estudia actualmente. ',
            'user_id' => 1
        ]);

        Exam::create([
            'name' => 'Escala de Autovaloración D.A. por W.W.K. Zung.',
            'slug' => Str::slug('Escala de Autovaloración D.A. por W.W.K. Zung.'),
            'description' => 'Este cuestionario ha sido diseñado para identificar los niveles de ansiedad; nos permitirá conocer cómo USTED SE SIENTE ACTUALMENTE. No es un test de personalidad. No hay tiempo límite para contestar el cuestionario, no obstante puede ocupar aproximadamente unos 10 minutos. No hay respuestas correctas ni incorrectas. Será útil en la medida que sea sincero(a) con sus respuestas.',
            'user_id' => 1
        ]);

        Exam::create([
            'name' => 'Escala de Autovaloración D.D. por W.W.K. Zung.',
            'slug' => Str::slug('Escala de Autovaloración D.D. por W.W.K. Zung.'),
            'description' => 'Este cuestionario ha sido diseñado para identificar los niveles de tristeza; nos permitirá conocer cómo USTED SE SIENTE ACTUALMENTE. No es un test de personalidad. No hay tiempo límite para contestar el cuestionario, no obstante puede ocupar aproximadamente unos 10 minutos. No hay respuestas correctas ni incorrectas. Será útil en la medida que sea sincero(a) con sus respuestas.',
            'user_id' => 1
        ]); */
    }
}
