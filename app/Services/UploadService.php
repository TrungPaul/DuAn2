<?php

namespace App\Services;
use Illuminate\Http\Request;

class UploadService
{
    public function uploadFile($avatar)
    {
        $name = time() . '.' . $avatar->getClientOriginalExtension();
        $destinationPath = public_path('/images/avatar');
        $avatar->move($destinationPath, $name);

        return $name;
    }

}
