<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class Users extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.users', compact('users'));

    }

    public function delete($id){
        //User::find($id)->delete();
    }
}
