<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Spa extends Authenticatable
{
    use Notifiable;

    protected $guard = 'spa';

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
