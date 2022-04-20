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
        Exam::create([
            'name' => 'Cuestionario Caracterológico de Gastón Berger',
            'slug' => Str::slug('Cuestionario Caracterológico de Gastón Berger'),
            'description' => '',
            'user_id' => 1
        ]);

        Exam::create([
            'name' => 'Inventario de Hábitos de Estudios CASM-85',
            'slug' => Str::slug('Inventario de Hábitos de Estudios CASM-85'),
            'description' => '',
            'user_id' => 1
        ]);

        Exam::create([
            'name' => 'Escala de Autovaloración D.A. por W.W.K. Zung.',
            'slug' => Str::slug('Escala de Autovaloración D.A. por W.W.K. Zung.'),
            'description' => '',
            'user_id' => 1
        ]);

        Exam::create([
            'name' => 'Escala de Autovaloración D.D. por W.W.K. Zung.',
            'slug' => Str::slug('Escala de Autovaloración D.D. por W.W.K. Zung.'),
            'description' => '',
            'user_id' => 1
        ]);

        Exam::create([
            'name' => 'Inteligencias Múltiples',
            'slug' => Str::slug('Inteligencias Múltiples'),
            'description' => '',
            'user_id' => 1
        ]);

        Exam::create([
            'name' => 'Estilos de Aprendizaje',
            'slug' => Str::slug('Estilos de Aprendizaje'),
            'description' => '',
            'user_id' => 1
        ]);
    }
}
