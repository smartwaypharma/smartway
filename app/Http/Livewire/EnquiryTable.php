<?php

namespace App\Http\Livewire;

use App\Models\EnquiryData;
use Livewire\Component;

class EnquiryTable extends Component
{
    public function render()
    {
        return view('livewire.enquiry-table', [
            'records' => EnquiryData::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }
}
