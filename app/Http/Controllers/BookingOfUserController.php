<?php

namespace App\Http\Controllers;

use App\ServiceDetail;
use App\Spa;
use App\User;
use Illuminate\Http\Request;
use App\Services\BookingOfUserService;
use App\BookingOfUser;
use App\Time;
use App\Staff;
use Illuminate\Support\Facades\Auth;
use Mail;
use Carbon\Carbon;

class BookingOfUserController extends Controller
{
    public function __construct(BookingOfUserService $bookingOfUserService)
    {
        $this->booking = $bookingOfUserService;
    }

    public function getBook($spaId)
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $dateNow = $now->toDateString();
        $staff = Staff::where('spa_id', $spaId)->get();
        return view('user.DateBook', compact('spaId' , 'staff' , 'dateNow'));
    }
    public function getBookingFS($serviceId)
    {
        $service = ServiceDetail::find($serviceId);
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $dateNow = $now->toDateString();
        $spaId = $service->spa_id;
        $staff = Staff::where('spa_id', $spaId)->get();

        return view('user.DateBookFromService', compact('spaId' , 'staff' , 'dateNow' ,'serviceId'));
    }

    public function book(Request $request, $spaId)
    {
        $this->validate($request, [
            'date_booking' => 'required|after:yesterday',
            'staff_id' => 'required'
        ]);
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $timeNow = $now->toTimeString();
        $date = $now->toDateString();
        $data = $request->date_booking;
        $staff_id = $request->staff_id ;
        $service = ServiceDetail::where('spa_id', $spaId)->get();
        $serviceBeBook = BookingOfUser::where('spa_id', $spaId)->where('staff_id', $staff_id)->whereDate('date_booking', $request->date_booking)->pluck('time_booking');
        if ($request->date_booking == $date) {
            $timeNotBook = Time::whereNotIn('id', $serviceBeBook)->whereTime('time', '>=', $timeNow)->get();
        }else{
            $timeNotBook = Time::whereNotIn('id', $serviceBeBook)->get();
        }
        $times = Time::all();

        return view('user.booking', compact('times', 'service', 'staff_id', 'spaId', 'timeNotBook', 'data'));
    }
    //book from service
    public function bookservice(Request $request, $serviceId)
    {
        $this->validate($request, [
            'date_booking' => 'required|after:yesterday',
            'staff_id' => 'required'
        ]);

        $service = ServiceDetail::find($serviceId);
        $spaId = $service->spa_id;
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $timeNow = $now->toTimeString();
        $date = $now->toDateString();
        $data = $request->date_booking;
        $staff_id = $request->staff_id ;
        $serviceBeBook = BookingOfUser::where('spa_id', $spaId)->where('staff_id', $staff_id)->whereDate('date_booking', $request->date_booking)->pluck('time_booking');
        if ($request->date_booking == $date) {
            $timeNotBook = Time::whereNotIn('id', $serviceBeBook)->whereTime('time', '>=', $timeNow)->get();
        }else{
            $timeNotBook = Time::whereNotIn('id', $serviceBeBook)->get();
        }
        $times = Time::all();

        return view('user.bookingService', compact('times', 'service', 'staff_id', 'spaId', 'timeNotBook', 'data' , 'serviceId'));
    }

    public function addBooking(Request $request, $spaId)
    {
//         $this->validate($request, [
//             'name' => 'required',
//             'email' => 'required|email',
//             'service_detail_id' => 'required',
//             'date_booking' => 'required|after:today',
//             'time_booking' => 'required',
//             'staff_id' => 'required'
//         ]);

        $booking = new BookingOfUser();
        $booking->fill($request->all());
        $booking->spa_id = $spaId;
        if(Auth::user() != null) {
             $booking->user_id = Auth::user()->id;
        }
        $name = $request->name;
        $email = $request->email;
        $spa = Spa::find($spaId);
        $service = ServiceDetail::find($request->service_detail_id);
        $times = Time::find($request->time_booking);
        $content = "Cảm ơn bạn đã đặt dịch vụ" . " " . $service->name_service . " " . "bên spa" . " " . $spa->name . "vào lúc" . $times->time . " " . "ngày" . $booking->date_booking;

        $bookingStaff = BookingOfUser::
        where('spa_id', $spaId)
            ->whereDate('date_booking', '=', $booking->date_booking)
            ->where('staff_id', $booking->staff_id)
            ->where('time_booking', $booking->time_booking)
            ->count();
        if (($bookingStaff != 0)) {
            return $this->getBook($spaId)->with('fail', 'Đặt lịch không thành công , nhân viên đã có hẹn');
        } else {

            $booking->save();
            Mail::send('mailbooking', [
                'name' => $name,
                'content' => $content,
            ], function ($msg) use ($email) {
                $msg->to($email, 'Đặt dịch vụ')->subject('Đặt dịch vụ');
            });

            return redirect()->route('home')->with('success', 'Đặt lịch thành công ');
        }
    }

    public function getBookingOfSpa(Request $request)
    {
        $date_booking = $request->date;
        $service_id = $request->service_detail_id;
        $staff_id = $request->staff;
        $idSpa = Auth::guard('spa')->user()->id;
        $employee = Staff::where([
            ['spa_id', $idSpa],
            ['is_active', 1]
        ])->get();
        // lấy ngày tháng năm hiện tại
        $today = date("Y/m/d");
        $choose_service = ServiceDetail::where('spa_id', $idSpa)->select('name_service', 'id')->get();
        $getData = BookingOfUser::where([
            ['spa_id', $idSpa],
            ['staff_id', '<>', 0],
            ['date_booking', '>=', $today],
            ['status', '<>', 0],
            ['status', 1]
        ])->when($date_booking, function ($query, $date_booking) {
            return $query->where('date_booking', $date_booking);
        })->when($staff_id, function ($query, $staff_id) {
            return $query->where('staff_id', $staff_id);
        })->when($service_id, function ($query, $service_id) {
            return $query->where('service_detail_id', $service_id);
        })->orderBy('id', 'DESC')->with('detailService')->paginate(10);

        return view('pages-spa.management-booking', compact('getData', 'choose_service', 'employee'));
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
        $getData = BookingOfUser::where([
            ['spa_id', $idSpa],
            ['status', 2]
        ])->where('date_booking', '<', $today)
            ->when($date_booking, function ($query, $date_booking) {
            return $query->where('date_booking', $date_booking);
        })->when($service_id, function ($query, $service_id) {
            return $query->where('service_detail_id', $service_id);
        })->orderBy('date_booking', 'DESC')->with('detailService')->paginate(10);

        return view('pages-spa.finished-booking', compact('getData', 'choose_service', 'today'));
    }

    public function cancelBooking($id)
    {
       $infoBooking = BookingOfUser::find($id);
       if($infoBooking->user_id != null ) {
          $user = User::find($infoBooking->user_id);
          $email = $user->email;
          $name = $user ->name;
       }else{
           $name = $infoBooking->name;
           $email = $infoBooking->email;
       }
       $times = Time::find($infoBooking->time_booking);
       $service = ServiceDetail::find($infoBooking->service_detail_id);
       $spa = Spa::find($infoBooking->spa_id);
       $content = "Dịch vụ" . " " . $service->name_service . " " . "bên spa" . " " . $spa->name . "vào lúc" . $times->time . " " . "ngày" . $infoBooking->time_booking . " " .  "đã bị hủy, cảm ơn bạn đã đặt dịch vụ bên spa";

        BookingOfUser::where('id', $id)
            ->update(['status' => 0]);

        Mail::send('mailbooking', [
            'name' => $name,
            'content' => $content,
        ], function ($msg) use ($email) {
            $msg->to($email, 'Hủy dịch vụ')->subject('Hủy dịch vụ');
        });

        return back();
    }

     public function destroyCancelBooking($id)
    {
        $cancel = BookingOfUser::where('id', $id)
            ->update(['status' => -1]);

        return back();
    }


    public function listCancelBooking(Request $request)
    {
        $date_booking = $request->date;
        $service_id = $request->service_detail_id;
        $idSpa = Auth::guard('spa')->user()->id;
        // lấy ngày tháng năm hiện tại
        $choose_service = ServiceDetail::where('spa_id', $idSpa)->select('name_service', 'id')->get();
        $getData = BookingOfUser::where([
            ['spa_id', $idSpa],
            ['status', 0]
        ])->when($date_booking, function ($query, $date_booking) {
            return $query->where('date_booking', $date_booking);
        })->when($service_id, function ($query, $service_id) {
            return $query->where('service_detail_id', $service_id);
        })->orderBy('id', 'DESC')->with('detailService')->paginate(10);

        return view('pages-spa.list-cancel-booking', compact('getData', 'choose_service', 'today'));
    }

    public function completeBook($id)
    {
        $cancel = BookingOfUser::where('id', $id)
            ->update(['status' => 2]);

        return back();
    }
}
