<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Spa;
use App\Http\Requests\SpaRequest;
use App\Http\Requests\LoginUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SpaController extends Controller
{
    public function register()
    {
        $location = DB::table('locations')->get();
        return view('pages-spa.register', compact('location'));
    }

    public function login()
    {
        return view('pages-spa.login');
    }

    public function post_login(LoginUser $request)
    {
        $data = $request->only(['email', 'password']);
        $checkLogin = Auth::attempt($data);
        if ($checkLogin) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login_spa');
        }
    }

    public function postRegister(SpaRequest $request)
    {
        $data = new Spa;
        $data->fill($request->all());
        $data['password'] = bcrypt($data['password']);
        if ($request->hasFile('image')) {
            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;
            $path = $request->file('image')->storeAs('spas', $filename);
            $data->image = $filename;
        }
        $data->save();
        return redirect()->back()->with('message', 'Đăng ký thành công! chúng tôi sẽ liên hệ lại cho bạn trong thời gian sớm nhất!');
    }

    public function show(Request $request)
    {
        $location = DB::table('locations')->select('id', 'name')->get();
        $service = DB::table('services')->select('id', 'name_service')->get();

        $kw = $request->key;
        $locations = $request->location;
        $result = Spa::where('is_active', 1)
            ->when($kw, function ($query, $kw) {
                return $query->where('name', 'like', "%$kw%");
            })
            ->when($locations, function ($query, $locations) {
                return $query->where('location', $locations);
            })->with('listService')->orderBy('id', 'DESC')->paginate(6);
        return view('pages.list-spa', compact('result', 'location', 'service'));
    }
}
