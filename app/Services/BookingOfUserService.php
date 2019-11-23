<?php

namespace App\Services;

use App\BookingOfUser;

class BookingOfUserService
{
    public function dataBooking($idSpa)
    {
        $result = BookingOfUser::where('spa_id', $idSpa)->orderBy('id', 'DESC')->paginate(5);
        return $result;
    }
}
