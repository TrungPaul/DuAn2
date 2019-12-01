<?php

namespace App\Http\Controllers;

use App\ServiceDetail;
use App\Services\BookingOfUserService;
use Illuminate\Http\Request;
use App\BookingOfUser;
use Illuminate\Support\Facades\Auth;

class BookingOfUserController extends Controller
{
    public function __construct(BookingOfUserService $bookingOfUserService)
    {
        $this->booking = $bookingOfUserService;
    }

    public function addBooking(Request $request)
    {
        BookingOfUser::create($request->all());

        return view('pages.home');
    }

    public function getBookingOfSpa(Request $request)
    {
        $date_booking = $request->date;
        $service_id = $request->service_detail_id;
        $idSpa = Auth::guard('spa')->user()->id;
        $choose_service = ServiceDetail::where('spa_id', $idSpa)->select('name_service', 'id')->get();

        $getData = BookingOfUser::where('spa_id', $idSpa)
            ->when($date_booking, function ($query, $date_booking) {
                return $query->where('date_booking', $date_booking);
            })
            ->when($service_id, function ($query, $service_id) {
                return $query->where('service_detail_id', $service_id);
            })->orderBy('id', 'DESC')->with('detailService')->paginate(5);

        return view('pages-spa.management-booking', compact('getData','choose_service'));
    }

    public function getDetailBooking($id)
    {
        $result = $this->booking->detailBooking($id);

        return response()->json($result, 200);
    }
}
