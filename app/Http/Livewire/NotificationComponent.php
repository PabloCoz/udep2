<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotificationComponent extends Component
{
    public $count;

    protected $listeners = ['notification'];

    public function mount()
    {
        $this->notification();
    }

    public function notification()
    {
        $this->count = auth()->user()->unreadNotifications->count();
    }

    public function render()
    {
        return view('livewire.notification-component');
    }

    public function resetNotificationCount()
    {
        auth()->user()->notification = 0;
        auth()->user()->save();
    }
}
