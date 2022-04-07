<?php

namespace App\Http\Livewire\Students;

use App\Models\Exam;
use App\Models\Response;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Livewire\Component;

class ExamResponse extends Component
{
    use AuthorizesRequests;
    public $exam;

    public $selected;

    public function mount(Exam $exam)
    {
        $this->exam = $exam;
    }

    public function render()
    {
        return view('livewire.students.exam-response');
    }

    public function save()
    {
        $question = array_keys($this->selected); /* question_id */
        $option = array_values($this->selected); /* option_id */

        for ($i = 0; $i < count($option); $i++) {
            Response::create([
                'question_id' => $question[$i],
                'exam_id' => $this->exam->id,
                'option_id' => $option[$i],
                'user_id' => auth()->user()->id
            ]);
        }
        $this->reset('selected');
        return redirect()-route('students.exam');
    }
}
