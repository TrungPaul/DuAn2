<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingOfUser extends Model
{
    protected $table = 'booking_of_user';
    protected $fillable = [
        'user_id',
        'spa_id',
        'service_detail',
        'date'
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
        return $this->belongsTo(ServiceDetail::class, 'spa_id', 'id');
    }
}
