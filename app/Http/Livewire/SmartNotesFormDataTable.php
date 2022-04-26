<?php

namespace App\Http\Livewire;

use App\Models\SmartNotesFormData;
use Livewire\Component;

class SmartNotesFormDataTable extends Component
{
    public function render()
    {
        return view('livewire.smart-notes-form-data-table', [
            'records' => SmartNotesFormData::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }
}
