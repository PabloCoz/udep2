<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;
    
    public $search;

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('DNI', 'LIKE', '%' . $this->search . '%')
                    ->paginate(8);
        return view('livewire.admin.users-index', compact('users'));
    }

    public function clearPage()
    {
        $this->resetPage();
    }
}
