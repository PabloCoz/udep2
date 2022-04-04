<?php

namespace App\Http\Livewire\Students;

use App\Models\Exam;
use App\Models\User;
use Livewire\Component;

class ExamStudents extends Component
{
    public function render()
    {
        $users = User::find(2)->exams_response()->get();
        return view('livewire.students.exam-students', compact('users'));
    }
}
