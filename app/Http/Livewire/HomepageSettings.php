<?php

namespace App\Http\Livewire;

use App\Models\Settings;
use Livewire\Component;

class HomepageSettings extends Component
{
    public $articles;
    public $data;
    public $model;

    public $rules = [
        'articles' => 'array|max:3',
    ];

    public function render()
    {
        return view('livewire.homepage-settings');
    }

    public function mount()
    {
        $this->model = Settings::where('key', 'homepage-articles')->first();

        if ($this->model) {
            $this->articles = json_decode($this->model->value);

            $this->data = \App\Models\Post::select('id', 'title as text')
                ->whereIn('id', $this->articles)
                ->get()
                ->toArray();
        }
    }

    public function save()
    {
        $this->validate();

        if (!$this->model) {
            $this->model = new Settings();
            $this->model->key = 'homepage-articles';
        }

        $this->model->value = json_encode($this->articles);
        $this->model->save();
    }
}
