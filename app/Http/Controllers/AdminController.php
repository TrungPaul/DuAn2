<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginUser;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;
use App\Services\ UserServices;
use App\Service;
use App\Spa;
use App\User;
use App\Post;
use Session;
use Illuminate\Support\Facades\Lang;
use Mail;

class AdminController extends Controller
{
    protected $userServices;

    public function __construct(UserServices $userServices)
    {
        $this->userServices = $userServices;
    }

    public function loginAdmin()
    {
        return view('admin.login_admin');
    }

    public function postLogin(LoginUser $request)
    {
        $role = Config::get('spa');
        // check validate , lấy ra dữ liệu
        $data = $request->only(['email', 'password']);
        // KIỂM TRA ĐĂNG NHẬP EMAIL VÀ PASSWWORD VỪA NHẬN
        $checklogin = Auth::attempt($data);
        if ($checklogin == false) {
            $message = 'Email hoặc mật khẩu không đúng';
            return view('admin.login_admin', compact('message'));
        } elseif (Auth::user()->role != $role['role_type_admin']) {
            $message = 'Tài khoản của bạn không có quyền truy cập';
            return view('admin.login_admin', compact('message'));
        } else {
            return redirect()->route('admin');
        }
    }

    public function logoutAdmin()
    {
        Auth::logout();
        Session::flush();

        return redirect()->route('admin.login');
    }

    public function listuser()
    {
        $gender = Config::get('spa');
        $user = $this->userServices->listuser();
        
        return view('admin.list_user', compact('user', 'gender'));
    }

    public function edituser(User $user)
    {
        $gender = Config::get('spa');

        return view('admin.edit_user', \compact('gender', 'user'));
    }

    public function updateuser(Request $request)
    {
        $user = $this->userServices->update($request);

        return redirect()->route('admin.listuser')
            ->with('success', Lang::get('Thành công'));
    }

    public
    function listservice()
    {
        $service = Service::all();
        return view('admin.list_service', \compact('service'));
    }

    public
    function listspa()
    {
        $spa = Spa::all();
        $active = Config::get('spa');
        return view('admin.list_spa', \compact('spa', 'active'));
    }

    public
    function editspa(Spa $spa)
    {
        $active = Config::get('spa');
        return view('admin.edit_spa', \compact('spa', 'active'));
    }

    public
    function activespa(Request $request)
    {
        $spa = Spa::find($request->id);
        $spa->fill($request->all());
        $spa->save();
        $name = $request->name;
        $email = $request->email;
        $content = "Cảm ơn bạn vì đã tin dùng SpaTime, tài khoản spa của bạn đã được kích hoạt, bạn có thể đăng nhập và bắt đầu sử dụng
                    các chức năng của SpaTime";
       
        Mail::send('mailactivespa', [
            'name' => $name,
            'content' => $content,
        ], function ($msg) use ($email){
            $msg->to($email, 'Đăng ký spa thành công')->subject('Đăng ký spa thành công');
        });
        return redirect()->route('admin.listspa')
            ->with('success', Lang::get('Thành công'));
    }

    function inactivespa(Request $request)
    {
        $spa = Spa::find($request->id);
        $spa->fill($request->all());
        $spa->save();
        $name = $request->name;
        $email = $request->email;
        $content = "Tài khoản spa của bạn đã bị khoá do vi phạm một số chính sách của chúng tôi, xin lỗi bạn vì sự bất tiện này
                    mọi thắc mắc xin liên hệ số điện thoại: 0374969474, hoặc email: spatime@gmail.com để được hỗ trợ";
       
        Mail::send('mailinactivespa', [
            'name' => $name,
            'content' => $content,
        ], function ($msg) use ($email){
            $msg->to($email, 'Tài khoản spa đã bị khoá')->subject('Tài khoản spa đã bị khoá');
        });
        return redirect()->route('admin.listspa')
            ->with('success', Lang::get('Thành công'));
    }

    public function count()
    {
        $user = User::count();
        $spa = Spa::count();
        $service = Service::count();
        $post = Post::count();
        return \view('admin.admin', \compact('user','spa','service', 'post'));
    }
}
