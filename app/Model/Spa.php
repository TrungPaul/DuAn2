<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Spa extends Model
{
    protected $table = 'spas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'location',
        'phone',
        'images',
    ];


}
