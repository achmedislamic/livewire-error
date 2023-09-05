<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.user-table', [
            'users' => User::query()
                ->where('name', 'like', "%{$this->search}%")
                ->get()
        ]);
    }
}
