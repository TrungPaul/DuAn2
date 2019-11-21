<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    protected $table = 'service_detail';
    protected $fillable = [
        'spa_id',
        'service_id',
        'name_service',
        'price_service',
        'discount',
        'detail_service',
        'image_service'
    ];
}
