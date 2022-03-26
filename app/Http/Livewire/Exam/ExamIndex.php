<?php

namespace App\Http\Livewire\Exam;

use App\Models\Exam;
use Livewire\Component;
use Livewire\WithPagination;

class ExamIndex extends Component
{
    use WithPagination;
    
    public function render()
    {
        $exams = Exam::orderBy('id', 'desc')->paginate(6);
        return view('livewire.exam.exam-index', compact('exams'));
    }
}
