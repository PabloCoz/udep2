<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Models\User;
use App\Notifications\MessageSent;
use Livewire\Component;

class Messages extends Component
{
    public $open = false;

    public $subject, $body, $to_user_id = 0;

    protected $rules = [
        'subject' => 'required',
        'body' => 'required',
        'to_user_id' => 'required'
    ];

    public function render()
    {
        $users = User::where('id', '!=', auth()->user()->id)->get();
        return view('livewire.messages', compact('users'));
    }

    public function store()
    {
        $this->validate();

        $message = Message::create([
            'from_user_id' => auth()->user()->id,
            'to_user_id' => $this->to_user_id,
            'subject' => $this->subject,
            'body' => $this->body,
        ]);

        $user = User::find($this->to_user_id);
        $user->notify(new MessageSent($message));

        $this->reset('subject', 'body', 'to_user_id', 'open');
    }
}
