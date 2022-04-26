<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Filter extends Component
{
    public function render()
    {
        return view('livewire.filter', [
            'records' => \App\Models\Filter::paginate(20),
        ]);
    }
}
