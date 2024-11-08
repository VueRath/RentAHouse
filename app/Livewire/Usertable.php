<?php

namespace App\Livewire;

use App\Models\rentalUsers;
use Livewire\Component;
use Livewire\WithPagination;

class Usertable extends Component
{
    use WithPagination;

    public function render()
    {
        $users = rentalUsers::paginate(10);
        return view('livewire.usertable', ['users' => $users]);
    }
}
