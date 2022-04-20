<?php

namespace App\Http\Livewire\Psychologist;

use App\Models\Battery;
use App\Models\Exam;
use Livewire\Component;
use Illuminate\Support\Str;

class BatteryExam extends Component
{
    public $open = false;

    public $name, $exam = [];

    public function render()
    {
        $exams = Exam::get();
        return view('livewire.psychologist.battery-exam', compact('exams'));
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|max:255',
        ]);

        $battery = Battery::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);
        foreach ($this->exam as $exam) {
            if ($exam > 0) {
                $battery->exams()->attach($exam);
            }
        }

        $this->reset('name', 'open', 'exam');
        return redirect()->route('battery');
    }
}
