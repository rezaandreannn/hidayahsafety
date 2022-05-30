<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class Created extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.category.created');
    }

    public function store()
    {
        $this->validate([
            'name' => ['required'],

        ]);

        Category::create([
            'name' => $this->name
        ]);

        $this->null();

        $this->emit('store');
    }

    private function null()
    {
        $this->name = null;
        $this->email = null;
    }
}
