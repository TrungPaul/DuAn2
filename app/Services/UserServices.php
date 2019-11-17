<?php

namespace App\Services;

use App\Http\Requests\ChangePasswordRequests;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Services\UploadService;

class UserServices
{
    protected $uploadFile;

    public function __construct(UploadService $uploadFile)
    {
        $this->uploadFile = $uploadFile;
    }

    public function updateProfile(Request $request)
    {
        $user = User::find($request->id);
        $user->fill($request->all());

        if ($request->hasFile('avatar')) {

            $path = $this->uploadFile->uploadFile($request);

            $user->avatar = request()->avatar->move('images/avatar', $path);
        }

        $user->save();

        return $user;
    }

    public function savePassword(ChangePasswordRequests $request)
    {
        $data = $request->except('_token', 'id');
        $user = User::find($request->id);

        if (password_verify($request->password, $user->password) == false) {
            return redirect()->route('user.change-password')
                             ->with('errmsg', 'Mật khẩu cũ không chính xác');
        }

        $user->update(
            [
                'password' => bcrypt($request->newpassword),
            ]
        );

        return redirect()->route('user.profile')
                         ->with('errmsg', 'Change password successfully');
    }
}
