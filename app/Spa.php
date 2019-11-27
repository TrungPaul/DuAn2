<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spa extends Model
{
    protected $table = 'spas';
    protected $fillable = [
        'email',
        'name',
        'city_id',
        'location',
        'phone',
        'image',
        'is_active',
    ];
    protected $hidden = [
        'password'
    ];

    public function listService()
    {
        return $this->belongsTo(ServiceDetail::class, 'spa_id', 'id');
    }

    public function city()
	{
    	return $this->belongsTo('App\City');
    }
}
