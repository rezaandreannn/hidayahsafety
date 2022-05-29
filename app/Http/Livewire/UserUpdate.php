<?php

namespace App\Http\Livewire;

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
}
