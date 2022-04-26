<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Category extends Component
{
    public function render()
    {
        return view('livewire.category', [
            'records' => \App\Models\Category::paginate(20),
        ]);
    }

    public function delete($id)
    {
        \App\Models\Category::destroy($id);

        session()->flash('message', 'Category successfully deleted.');
    }
}
