<?php

namespace App\Services;

class UploadImageService
{
    public function uploadFile($avatar)
    {
        $extension = $avatar->getClientOriginalExtension();
        $file_name = time() . '-' . rand(1, 100) . '.' . $extension;

        return asset($avatar->move('images/employee', $file_name));
    }
}
