<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public $form = false;
    public $edit = false;

    protected $listeners = [
        'store' => 'handleStore'
    ];

    public function render()
    {
        return view('livewire.category.index', [
            'categories' => Category::latest()->get()
        ]);
    }

    public function formAdd()
    {
        $this->form = true;
        $this->edit = false;

        // $this->check = false;
    }

    public function getCategory($id)
    {
        $this->form = true;
        $this->edit = true;
    }

    public function back()
    {
        $this->form = false;
    }


    public function handleStore()
    {
        session()->flash('message', 'Berhasil menambahkan data kategori baru');
        $this->back();
    }
}
