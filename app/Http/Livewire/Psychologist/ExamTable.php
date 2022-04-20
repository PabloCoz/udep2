<?php

namespace App\Http\Livewire\Psychologist;

use Livewire\Component;

class ExamTable extends Component
{
    public $batteries;

    public function render()
    {
        return view('livewire.psychologist.exam-table');
    }
}
