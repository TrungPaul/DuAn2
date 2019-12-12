<?php

namespace App\Http\Controllers\User;

use App\BookingOfUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequests;
use App\ServiceDetail;
use App\Services\BookingOfUserService;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use App\Services\UserServices;
use App\Http\Requests\UserRequest;


class HomeController extends Controller
{
    protected $userService;

    public function __construct(UserServices $userService, BookingOfUserService $bookingOfUserService)
    {
        $this->userService = $userService;
        $this->booking = $bookingOfUserService;
    }

    public function profile()
    {
        $gender = Config::get('spa');

        return view('user.profile', compact('gender'));
    }

    public function editprofile()
    {

        $gender = Config::get('spa');

        return view('user.edit_profile', compact('gender'));
    }

    public function updateprofile(UserRequest $request)
    {
        $this->userService->updateProfile($request);

        return redirect()->route('user.profile')->with('success', 'Thay đổi thông tin thành công');
    }

    public function changePassword()
    {
        return view('user.change_password');
    }

    public function savePassword(ChangePasswordRequests $request)
    {
        $this->userService->savePassword($request);

        return redirect()->route('user.profile');
    }

    public function listbooking(Request $request)
    {
        $date_booking = $request->date;
        $service_id = $request->service_detail_id;
        $spa_id = $request->spa;
        // lấy danh sách các spa đã đặt lịch của user và trạng thái là đang đặt lịch
        $spa = BookingOfUser::where([
            ['user_id', Auth::user()->id],
            ['status', 1]
        ])->select('service_detail_id')->get();
        // lấy ngày tháng năm hiện tại
        $today = date("Y/m/d");
        $getData = BookingOfUser::where([
            ['user_id', Auth::user()->id],
            ['date_booking', '>=', $today],
            ['status', 1]
        ])->when($date_booking, function ($query, $date_booking) {
            return $query->where('date_booking', $date_booking);
        })->when($service_id, function ($query, $service_id) {
            return $query->where('service_detail_id', $service_id);
        })->orderBy('id', 'DESC')->with('detailService', 'spaBook')->paginate(5);

        return view('user.list_booking', compact('spa', 'getData'));
    }

    public function listbookingcancel(Request $request)
    {
        $date_booking = $request->date;
        $service_id = $request->service_detail_id;
        $spa_id = $request->spa;
        // lấy danh sách các spa đã đặt lịch của user và trạng thái là đang đặt lịch
        $spa = BookingOfUser::where([
            ['user_id', Auth::user()->id],
            ['status', 0]
        ])->select('spa_id', 'service_detail_id')->get();
        // lấy ngày tháng năm hiện tại
        $today = date("Y/m/d");
        $limited_date = date('d/m/y');
        $getData = BookingOfUser::where([
            ['user_id', Auth::user()->id],
            ['status', 0]
        ])->when($date_booking, function ($query, $date_booking) {
            return $query->where('date_booking', $date_booking);
        })->when($spa_id, function ($query, $spa_id) {
            return $query->where('spa_id', $spa_id);
        })->when($service_id, function ($query, $service_id) {
            return $query->where('service_detail_id', $service_id);
        })->orderBy('id', 'DESC')->with('detailService', 'spaBook')->paginate(5);
        return view('user.list_booking_cancel', compact('getData', 'spa', 'limited_date'));
    }

    public function listbookingdone(Request $request)
    {
        $date_booking = $request->date;
        $service_id = $request->service_detail_id;
        $spa_id = $request->spa;
        // lấy danh sách các spa đã đặt lịch của user và trạng thái là đang đặt lịch
        $spa = BookingOfUser::where([
            ['user_id', Auth::user()->id],
            ['status', 2]
        ])->select('spa_id', 'service_detail_id')->get();
        // lấy ngày tháng năm hiện tại
        $today = date("Y/m/d");
        $getData = BookingOfUser::where([
            ['user_id', Auth::user()->id],
            ['status', 2]
        ])->when($date_booking, function ($query, $date_booking) {
            return $query->where('date_booking', $date_booking);
        })->when($spa_id, function ($query, $spa_id) {
            return $query->where('spa_id', $spa_id);
        })->when($service_id, function ($query, $service_id) {
            return $query->where('service_detail_id', $service_id);
        })->orderBy('id', 'DESC')->with('detailService', 'spaBook')->paginate(5);
        return view('user.list_booking_done', compact('getData', 'spa'));
    }

    public function cancelBooking($id)
    {
        $cancel = BookingOfUser::where('id', $id)
            ->update(['status' => 0]);

        return back();
    }

    public function destroyCancelBooking($id)
    {
        $cancel = BookingOfUser::where('id', $id)
            ->update(['status' => -1]);

        return back();
    }

    public function getDetailBooking($id)
    {
        $result = $this->booking->detailBooking($id);

        return response()->json($result, 200);
    }
}
