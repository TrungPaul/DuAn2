<?php

namespace App\Services;

use App\Interfaces\StaffInterface;
use App\Services\UploadImageService;
use App\Staff;
use Illuminate\Support\Facades\Auth;

class StaffService implements StaffInterface
{
    const STATUS_NOT_ACTIVE = -1;

    public function __construct(UploadImageService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function addEmployee($request)
    {

        $employee = new Staff();
        $employee->fill($request->all());
        $employee->spa_id = Auth::user()->id;
        if ($request->hasFile('avatar')) {
            $employee->avatar = $this->uploadService->uploadFile($request->avatar);
        }

        return $employee->save();

    }

    public function updateEmployee($id, $request)
    {
        $dataServe = Staff::find($id);
        $dataServe->fill($request->all());
        if ($request->hasFile('avatar')) {
            $dataServe->avatar = $this->uploadService->uploadFile($request->avatar);
        }

        return $dataServe->update();
    }

    public function deleteEmployee($id)
    {
        return Staff::find($id)->update(
            ['is_active' => self::STATUS_NOT_ACTIVE]
        );
    }
}
