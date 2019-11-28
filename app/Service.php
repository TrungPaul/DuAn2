<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'spa_id',
        'name_service',
        'icon',
    ];

    public function listSpa()
    {
        $this->belongsTo(Spa::class, 'spa_id', 'id');
    }
}
