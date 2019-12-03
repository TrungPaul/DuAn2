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
        'time_booking',
        'service_detail',
        'date_booking',
        'staff_id',
        'service_detail_id'
    ];

    public function chooseStaff()
    {
        return $this->belongsToMany(Staff::class);
    }

    public function userBook()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function detailService()
    {
        return $this->belongsTo(ServiceDetail::class, 'service_detail_id', 'id');
    }

    public function detailStaff()
    {
        return $this->belongsTo(Staff::class, 'staff_id', 'id');
    }
}
