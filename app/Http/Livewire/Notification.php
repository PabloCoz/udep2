<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Notification extends Component
{
    public $messages;

    public function mount()
    {
        $this->messages = auth()->user()->notifications;
    }
    public function render()
    {
        return view('livewire.notification');
    }
}
