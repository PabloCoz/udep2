<?php

namespace App\Http\Livewire\Psychologist\Exam;

use App\Models\Exam;
use App\Models\Question;
use Livewire\Component;

class QuestionCreate extends Component
{
    public $create = false, $exam;

    public $name, $options = [];

    protected $rules = [
        'name' => 'required',
    ];

    public function render()
    {
        return view('livewire.psychologist.exam.question-create');
    }

    public function addOption()
    {
        $this->options[] = '';
    }

    public function removeOption($index)
    {
        unset($this->options[$index]);
        $this->options = array_values($this->options);
    }

    public function store()
    {
        $this->validate();

        $question = Question::create([
            'name' => $this->name,
            'exam_id' => $this->exam->id,
        ]);

        foreach ($this->options as $key => $option) {
            $question->options()->create([
                'name' => $option,
                'value' => $key + 1,
                'question' => $question->id,
            ]);
        }
        
        $this->reset('name', 'options', 'create');
        $this->exam = Exam::find($this->exam->id);
    }
}
