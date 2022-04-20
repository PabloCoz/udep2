<?php

namespace App\Http\Livewire\Psychologist\Exam;

use App\Models\Exam;
use Livewire\Component;
use Livewire\WithPagination;

class ExamIndex extends Component
{
    use WithPagination;

    public $exam = [];
    
    public function render()
    {
        $exams = Exam::orderBy('id', 'desc')->paginate(6);
        return view('livewire.psychologist.exam.exam-index', compact('exams'));
    }
}
