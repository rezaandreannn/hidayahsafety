<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;



class UserIndex extends Component
{

    public $showFormUpdate = false;

    protected $listeners = [
        'userUpdate' => 'handleUserUpdate'
    ];

    public function render()
    {
        return view('livewire.user-index', [
            'users' => User::latest()->get()
        ]);
    }

    public function getUser($id)
    {
        $this->showFormUpdate = true;
        $user = User::find($id);
        $this->emit('getUser', $user);
    }

    public function back()
    {
        $this->showFormUpdate = false;
    }

    public function handleUserUpdate($user)
    {

        session()->flash('message', 'Succesfully was ' . $user['name'] . ' updated');
        $this->back();
    }
}
