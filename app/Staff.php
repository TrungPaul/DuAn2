<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';

    protected $fillable = [
        'name',
        'avatar',
        'gender',
        'spa_id',
        'is_active'
    ];
}
