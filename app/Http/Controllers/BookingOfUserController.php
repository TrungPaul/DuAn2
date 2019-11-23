<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookingOfUser;

class BookingOfUserController extends Controller
{
    public function __construct(BookingOfUserService $bookingOfUserService)
    {
        $this->booking = $bookingOfUserService;
    }

    public function addBooking(Request $request)
    {
        dd($request);
        BookingOfUser::create($request->all());

        return view('pages.home');
    }

    public function getBookingOfSpa()
    {
        $getData = $this->booking->dataBooking(Auth::user()->id);

        return view('pages-spa.management-booking', compact('getData'));
    }
}
