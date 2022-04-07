<?php

namespace App\Http\Livewire\Psychologist;

use App\Models\User;
use Livewire\Component;

class Evaluation extends Component
{
    public $user;

    public function mount(User $user)
    {
        $user;
    }

    public function render()
    {
        return view('livewire.psychologist.evaluation');
    }
}
