<?php

namespace App\Http\Livewire\Exam;

use App\Models\Exam;
use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $exam, $students = [];

    public $open = false;

    public function render()
    {
        $allUser = User::all();
        return view('livewire.exam.users', compact('allUser'));
    }

    public function save()
    {
        $this->exam->students()->sync($this->students);
        $this->reset('open', 'students');
        return redirect()->route('exams.index');
    }
}
