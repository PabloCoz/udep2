<?php

namespace App\Http\Livewire\Exam;

use App\Models\Exam;
use App\Models\Question;
use Livewire\Component;
use Livewire\WithPagination;

class ExamQuestions extends Component
{
    use WithPagination;

    public $exam;
    public $questions;

    protected $listeners = ['render' => 'render'];
    
    public function mount(Exam $exam)
    {
        $this->questions = $exam->questions;
    }
    
    public function render()
    {
        return view('livewire.exam.exam-questions');
    }

    public function destroy(Question $question)
    {
        $question->delete();
        $this->exam = Exam::find($this->exam->id);
    }
}
