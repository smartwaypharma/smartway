<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsFormData extends Model
{
    use HasFactory;

    protected $table = 'contactus_form_data';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'company',
        'post_id',
        'post_title'
    ];
}
