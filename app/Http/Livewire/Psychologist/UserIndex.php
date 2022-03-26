<?php

namespace App\Http\Livewire\Psychologist;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserIndex extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('DNI', 'LIKE', '%' . $this->search . '%')
                    ->paginate(8);
        return view('livewire.psychologist.user-index', compact('users'));
    }

    public function clearPage()
    {
        $this->reset('page');
    }
}
