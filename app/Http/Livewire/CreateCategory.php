<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateCategory extends Component
{
    public $model;

    public $rules = [
        'model.name' => 'required|string|max:255|unique:categories,name',
        'model.slug' => 'required|string|max:255|unique:categories,slug',
        'model.access_for_unauthorized' => 'required',
    ];

    public function render()
    {
        return view('livewire.create-category');
    }

    public function mount()
    {
        $this->model = new \App\Models\Category();
        $this->model->access_for_unauthorized = 'full';
    }

    public function slugify()
    {
        $this->model->slug = Str::slug($this->model->name);
    }

    public function save()
    {
        $this->validate();
        $this->model->save();

        session()->flash('message', 'Category successfully created.');

        return redirect()->route('admin.category');
    }
}
