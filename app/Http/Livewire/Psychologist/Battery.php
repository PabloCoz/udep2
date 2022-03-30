<?php

namespace App\Http\Livewire\Psychologist;

use App\Models\Exam;
use Livewire\Component;

class Battery extends Component
{
    public function render()
    {
        $exams = Exam::orderBy('id', 'desc')->paginate(6);
        return view('livewire.psychologist.battery', compact('exams'));
    }
}
