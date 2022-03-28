<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Notification extends Component
{
    public $notification;

    /* public function mount()
    {
        $this->notification();
    }

    public function notification()
    {
        $this->notifications = auth()->user()->notifications;
    } */

    public function render()
    {
        $messages = auth()->user()->notifications;
        return view('livewire.notification', compact('messages'));
    }
}
