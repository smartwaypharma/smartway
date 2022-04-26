<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;

class EditCategory extends Component
{
    public $model;

    public $rules = [
        'model.name' => 'required|string|max:255|unique:categories,name',
        'model.slug' => 'required|string|max:255|unique:categories,slug',
        'model.access_for_unauthorized' => 'required',
    ];

    public function render()
    {
        return view('livewire.edit-category');
    }

    public function mount($id)
    {
        $this->model = \App\Models\Category::find($id);
    }

    public function slugify()
    {
        $this->model->slug = Str::slug($this->model->name);
    }

    public function save()
    {
        $this->validate([
            'model.name' => 'required|string|max:255|unique:categories,name,' . $this->model->id,
            'model.slug' => 'required|string|max:255|unique:categories,slug,' . $this->model->id,
            'model.access_for_unauthorized' => 'required',
        ]);

        $this->model->save();

        session()->flash('message', 'Category successfully updated.');

        return redirect()->route('admin.category');
    }
}
