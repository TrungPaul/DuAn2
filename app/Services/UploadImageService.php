<?php

namespace App\Services;

class UploadImageService
{
    public function uploadFile($avatar)
    {
//        $image = $request->file('avatar');
        $name = time() . '.' . $avatar->getClientOriginalExtension();
        $destinationPath = public_path('/images/');
        $avatar->move($destinationPath, $name);

        return $name;
    }
}
