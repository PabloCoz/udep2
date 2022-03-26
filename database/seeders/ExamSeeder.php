<?php

namespace Database\Seeders;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
    }
}
