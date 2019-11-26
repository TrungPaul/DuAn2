<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spa;
use App\Http\Requests\SpaRequest;

class SpaController extends Controller
{
    public function register()
    {
        return view('pages-spa.register');
    }

    public function postRegister(SpaRequest $request)
    {
        $data = new Spa;
        $data->fill($request->all());
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
}
