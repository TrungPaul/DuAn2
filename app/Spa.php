<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spa extends Model
{
    protected $table = 'spas';
    protected $fillable = [
        'email',
        'name',
        'location',
        'phone',
        'image',
        'is_active',
    ];
    protected $hidden = [
        'password'
    ];
}
