<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookingOfUser;

class BookingOfUserController extends Controller
{
    public function addBooking(Request $request){
        dd($request);
        BookingOfUser::create($request->all());

        return view('pages.home');
    }
}
