<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spa extends Model
{
    protected $table = 'spas';
    protected $fillable = [
        'name',
        'location',
        'phone',
        'image',
        'is_active',
    ];
}
