<?php

namespace App\Http\Livewire\Psychologist\Exam;

use App\Models\Exam;
use App\Models\User;
use App\Notifications\ExamSend;
use Livewire\Component;

class Users extends Component
{
    public $exam, $students = [];

    public $open = false;


    public function render()
    {
        $allUser = User::all();
        return view('livewire.psychologist.exam.users', compact('allUser'));
    }

    public function save()
    {
        foreach ($this->students as $student) {
            if ($student > 0) {
                $this->exam->students()->attach($student);
                $user = User::find($student);
                $user->notify(new ExamSend($this->exam));
            }
        }
        $this->reset('open', 'students', 'exam');
        return redirect()->route('exams.index');
    }
}
