<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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


    public function postLogin(Request $request)
    {
        //nếu chưa login thì chạy xuống dưới
        $this->validate($request, [
            'email' => 'required|email|exists:users',
            'password' => 'required|min:6',
        ]);
        // check validate , lấy ra dữ liệu
        $data = $request->only(['email', 'password']);
        // KIỂM TRA ĐĂNG NHẬP EMAIL VÀ PASSWWORD VỪA NHẬN
        $checklogin = Auth::attempt($data);
        if ($checklogin) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login');
        }
    }

    public function register(RegisterRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        return redirect()->route('login')->with('crate_user',Lang::get('message.create_user'));
    }
}
