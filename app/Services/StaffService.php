<?php

namespace App\Services;

use App\Interfaces\StaffInterface;
use App\Services\UploadImageService;
use App\Staff;

class StaffService implements StaffInterface
{

    public function __construct(UploadImageService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function addEmployee($request)
    {
//        dd($request->all());
        $employee = new Staff();

        $employee->fill($request->all());
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/employee');
            $image->move($destinationPath, $name);

            $employee->avatar = $name;
//            $employee->avatar = $this->uploadService->uploadFile($image);
        }
        $employee ->save();

        return $employee;
    }
}
