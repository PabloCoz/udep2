<?php

namespace App\Http\Livewire\Psychologist;

use App\Models\User;
use App\Notifications\BatterySend;
use Livewire\Component;

class BatteryUsers extends Component
{
    public $openB = false;

    public $students = [], $battery;

    public function render()
    {
        $allUser = User::all();
        return view('livewire.psychologist.battery-users', compact('allUser'));
    }

    public function save()
    {
        foreach ($this->students as $student) {
            if ($student > 0) {
                $this->battery->users()->attach($student);
                $user = User::find($student);
                $user->notify(new BatterySend($this->battery));
            }
        }
        $this->reset('openB', 'students', 'battery');
        return redirect()->route('battery');
    }
}
