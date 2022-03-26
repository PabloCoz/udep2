<?php

namespace App\Http\Livewire\Exam;

use App\Models\Exam;
use App\Models\Option;
use App\Models\Question;
use Livewire\Component;

class QuestionEdit extends Component
{
    public $update = false;

    public $question, $opt = [], $options = [];

    protected $rules = [
        'question.name' => 'required',
    ];

    public function mount(Question $question)
    {
        $this->opt = $question->options;
        $this->question = $question;
    }

    public function render()
    {
        return view('livewire.exam.question-edit');
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

    public function deleteOpt()
    {
        foreach ($this->question->options as $option) {
            $this->question->options()->delete($option);
        }
        $this->exam = Exam::find($this->exam->id);
    }

    public function update()
    {
        $this->validate();
        foreach ($this->options as $key => $option) {
            $this->question->options()->create([
                'name' => $option,
                'value' => $key + 1,
                'question' => $this->question->id,
            ]);
        }
        $this->question->save();
        $this->reset('update');
        $this->exam = Exam::find($this->exam->id);
    }
}
