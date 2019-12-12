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
    function updatespa(Request $request)
    {
        $spa = Spa::find($request->id);
        $spa->fill($request->all());
        $spa->save();

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
