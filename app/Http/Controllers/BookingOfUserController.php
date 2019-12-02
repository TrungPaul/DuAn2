<?php

namespace App\Http\Controllers;

use App\ServiceDetail;
use App\Spa;
use Illuminate\Http\Request;
use App\Services\BookingOfUserService;
use App\BookingOfUser;
use App\Time;
use App\Staff;
use Illuminate\Support\Facades\Auth;
use Mail;

class BookingOfUserController extends Controller
{
    public function getBook($spaId){
        return view('user.DateBook', compact( 'spaId'));
    }

    public function book(Request $request ,$spaId)
    {
        dd($request->all());
        $this->validate($request, [
            'date_booking' => 'required|after:today',
        ]);
        $data = $request->date_booking;
        $staff = Staff::where('spa_id', $spaId)->get();
        $service = ServiceDetail::where('spa_id', $spaId)->get();
        $serviceBeBook = BookingOfUser::where('spa_id' ,  $spaId)->whereDate('date_booking', $request->date_booking)->pluck('time_booking');
        $timeNotBook = Time::whereNotIn('id' ,$serviceBeBook)->get();
        $times = Time::all();

        return view('user.booking' ,  compact('times', 'service', 'staff' , 'spaId', 'timeNotBook','data'));
    }

    public function addBooking(Request $request , $spaId){
//        dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'service_detail_id' => 'required',
            'date_booking' => 'required|after:today',
            'time_booking'=> 'required',
            'staff_id' => 'required'
        ]);

        $booking = new BookingOfUser();
        $booking->fill($request->all());
        $booking->spa_id = $spaId;
        $name = $request->name;
        $email = $request->email;
        $spa = Spa::find($spaId);
        $service = ServiceDetail::find($request->service_detail_id);
        $times = Time::find($booking->time_booking);
        $content = "Cảm ơn bạn đã đặt dịch vụ"." ". $service->name_service." ". "bên spa". " ". $spa->name ."vào lúc".$times->time. " " . "ngày" .$booking->date_booking ;

        $bookingStaff = BookingOfUser::
            where('spa_id', $spaId)
            ->whereDate('date_booking','=', $booking->date_booking)
            ->where('staff_id', $booking->staff_id)
            ->where('time_booking', $booking->time_booking)
            ->count();
        if (($bookingStaff != 0)){
            return $this->book($spaId)->with('fail', 'Đặt lịch không thành công , nhân viên đã có hẹn');
        }
        else{

            $booking->save();
            Mail::send('mailbooking', [
                'name' => $name,
                'content' => $content,
            ], function ($msg) {
                $msg->to( 'trungnd.dev@gmail.com', 'Đặt dịch vụ')->subject('Đặt dịch vụ');
            });

            return redirect()->route('home')->with('success', 'Đặt lịch thành công ');
        }
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
    public function finishedBook(Request $request)
    {
        $date_booking = $request->date;
        $service_id = $request->service_detail_id;
        $idSpa = Auth::guard('spa')->user()->id;
        // lấy ngày tháng năm hiện tại
        $today = date("Y/m/d");
        $choose_service = ServiceDetail::where('spa_id', $idSpa)->select('name_service', 'id')->get();
        $getData = BookingOfUser::where('spa_id', $idSpa)->where('date_booking', '<', $today)
            ->when($date_booking, function ($query, $date_booking) {
                return $query->where('date_booking', $date_booking);
            })
            ->when($service_id, function ($query, $service_id) {
                return $query->where('service_detail_id', $service_id);
            })->orderBy('id', 'DESC')->with('detailService')->paginate(5);
        return view('pages-spa.finished-booking', compact('getData', 'choose_service', 'today'));
    }

}
