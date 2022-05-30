<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class Update extends Component
{

    public $name;
    public $idCategory;

    protected $listeners = [
        'getCategory' => ' showCategory'
    ];

    public function render()
    {
        return view('livewire.category.update');
    }

    public function showCategory($category)
    {
        $this->name = $category['name'];
        $this->idCategory = $category['id'];
    }
}
