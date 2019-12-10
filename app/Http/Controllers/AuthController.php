<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginUser;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function getLogin() {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('pages.sign-in');

    }

    public function postLogin(LoginUser $request)
    {
        // check validate , lấy ra dữ liệu
        $data = $request->only(['email', 'password']);
        // KIỂM TRA ĐĂNG NHẬP EMAIL VÀ PASSWWORD VỪA NHẬN
        $checklogin = Auth::attempt($data);

        if ($checklogin == false) {
            $erorrLogin = 'Email hoặc mật khẩu không đúng';
            return view('pages.sign-in', compact('erorrLogin'));
        } elseif(Auth::user()->is_active == 0) {
            $erorrLogin = 'Tài khoản của bạn không được kích hoạt';
            return view('pages.sign-in', compact('erorrLogin'));
        } else{
            return redirect()->route('home');
        }
    }

    public function screen()
    {
        return view('pages.sign-up');
    }

    public function register(RegisterRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $create_user = Lang::get('message.create_user');

        return view('pages.sign-in', compact('create_user'));
    }
}
