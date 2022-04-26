<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartNotesFormData extends Model
{
    use HasFactory;

    protected $table = 'smartnotes_form_data';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'company'
    ];
}
