<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $fillable = [
        'full_name',
        'company',
        'phone_number',
        'email',
        'date_of_birth',
        'photo'
    ];
}
