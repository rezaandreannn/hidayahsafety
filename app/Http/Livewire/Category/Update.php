<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
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

    public function update()
    {
        $this->validate([
            'name' => ['required'],

        ]);
        // $data = Category::find($this->idCategory);
        if ($this->idCategory) {

            $category = Category::find($this->idCategory);

            if ($category) {
                $category->update([
                    'name'     => $this->name,
                    // 'content'   => $this->content
                ]);
            }
        }

        $this->emit('updated', $category);
    }
}
