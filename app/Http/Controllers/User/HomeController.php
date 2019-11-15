<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Services\UserServices;
use App\Http\Requests\UserRequest;


class HomeController extends Controller
{
    protected $userService;

    public function __construct(UserServices $userService)
    {
        $this->userService = $userService;
    }

    public function profile()
    {

        $gender = Config::get('spa');

        return view('pages.profile', compact('gender'));
    }

    public function editprofile()
    {

        $gender = Config::get('spa');

        return view('pages.edit_profile', compact('gender'));
    }

    public function updateprofile(Request $request)
    {
        $this->userService->updateProfile($request);

        return redirect()->route('user.profile');
    }

    public function changePassword()
    {
        return view('pages.change_password');
    }

    public function savePassword(ChangePasswordRequests $request)
    {
        $this->userService->savePassword($request);

        return redirect()->route('user.profile');
    }

}
