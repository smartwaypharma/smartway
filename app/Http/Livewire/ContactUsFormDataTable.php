<?php

namespace App\Http\Livewire;

use App\Models\ContactUsFormData;
use Livewire\Component;

class ContactUsFormDataTable extends Component
{
    public function render()
    {
        return view('livewire.contactus-form-data-table', [
            'records' => ContactUsFormData::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }
}
