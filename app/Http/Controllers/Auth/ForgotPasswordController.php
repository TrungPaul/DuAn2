<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;
use App\User;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function getFormResetPassword ()
    {

        return view('auth.passwords.email');
    }

    public function sendCodeResetPassword(Requests $request)
    {

        $email = $request ->email;

        $checkUser = User::where('email', $email)->first();

        if(!$checkUser)
        {
            return redirect()->back()->with('reset_email',Lang::get('message.reset_email'));
        }

        $code = bcrypt(md5(time().$email));

        $checkUser ->code = $code;
        $checkUser ->time_code = Carbon::now();
        $checkUser ->save();
        // var_dump($code);

        $url = route('get.linkreset', ['code' => $checkUser->code, 'email' => $email]);

        $data = [
            'route' => $url

        ];

        Mail::send('pages.mail', $data, function($message) use ($email){
	        $message->to($email, 'Visitor')->subject('Lấy lại mật khẩu');
	    });

        // return redirect()->back()->with('success', 'Link lấy lại mật khẩu đã được gửi vào email');
    }

    public function resetPassword()
    {
        return view('auth.passwords.reset');

    }
}
