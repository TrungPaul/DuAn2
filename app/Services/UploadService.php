<?php

namespace App\Services;
use Illuminate\Http\Request;

class UploadService
{
    public function uploadFile(Request $request)
    {

        $filename = $request->avatar->getClientOriginalName();
        $filename = str_replace(' ', '-', $filename);
        $filename = uniqid() . '-' . $filename;

        return $filename;
    }

}
