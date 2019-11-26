<?php

namespace App\Http\Controllers;

use App\ServiceDetail;
use Illuminate\Http\Request;
use App\BookingOfUser;
use App\Time;
use App\Staff;
use Illuminate\Support\Facades\Auth;

class BookingOfUserController extends Controller
{
    public function book($spaId)
    {
        $staff = Staff::where('spa_id', $spaId)->get();
        $service = ServiceDetail::where('spa_id', $spaId)->get();
        $times = Time::all();

        return view('user.booking' ,  compact('times', 'service', 'staff' , 'spaId'));
    }

    public function addBooking(Request $request , $spaId){

        $booking = new BookingOfUser();
        $booking->fill($request->all());
        $booking->user_id = 2;
        $booking->spa_id = $spaId;
        $bookingStaff = BookingOfUser::where('spa_id', $spaId)
            ->where('date_booking', $booking->date_booking)
            ->where('staff_id', $booking->staff_id)
            ->where('time_booking', $booking->time_booking)
            ->count();
        $slotTime = BookingOfUser::where('time_booking', $booking->time_booking)->count();
        if ($bookingStaff > 0 && $slotTime > 5 ){
            return('nhân viên đã có hẹn');
        }
        $booking->save();

        return view('pages.home');
    }
}
