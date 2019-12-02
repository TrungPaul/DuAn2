<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingOfUser extends Model
{
    protected $table = 'booking_of_user';
    protected $fillable = [
        'name',
        'email',
        'spa_id',
        'date_booking',
        'time_booking',
        'staff_id',
        'service_detail_id'
    ];

}

