<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserUpdate extends Component
{
    public $userId;
    public $name;
    public $email;

    protected $listeners = [
        'getUser' => 'showUser'
    ];

    public function render()
    {
        return view('livewire.user-update');
    }

    public function showUser($user)
    {
        $this->name = $user['name'];
        $this->email = $user['email'];
        $this->userId = $user['id'];
    }

    public function update()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

        ]);


        if ($this->userId) {
            $user = User::find($this->userId);
            $user->update([
                'name' => $this->name,
                'email' => $this->email
            ]);

            $this->null();

            $this->emit('userUpdate', $user);
        }
    }

    private function null()
    {
        $this->name = null;
        $this->email = null;
    }
}
