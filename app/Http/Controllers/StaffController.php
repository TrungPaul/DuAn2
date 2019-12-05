<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeeRequest;
use Illuminate\Http\Request;
use App\Staff;
use App\Interfaces\StaffInterface;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    const STATUS_DEFAULT = 0;

    public function __construct(StaffInterface $staffService)
    {
        $this->staffService = $staffService;
    }

    public function listEmployee(Request $request)
    {
        $key = $request->keyword;
        $idSpa = Auth::guard('spa')->user()->id;
        if (!$request->has('keyword') || empty($key)) {
            $getEmployee = Staff::where([
                    ['spa_id', $idSpa],
                    ['is_active', self::STATUS_DEFAULT]
                ]
            )->orderBy('id', 'DESC')->paginate(5);
        } else {
            $getEmployee = Staff::where([
                ['spa_id', $idSpa],
                ['is_active', self::STATUS_DEFAULT],
                ['name', 'like', "%$key%"]
            ])->orderBy('id', 'DESC')->paginate(5);
            $getEmployee->withPath("spa/employee/?keyword=$key");
        }

        return view('pages-spa.list-employee', compact('getEmployee'));
    }

    public function addEmployee()
    {
        return view('pages-spa.add-employee');
    }

    public function createEmployee(CreateEmployeeRequest $request)
    {
        $this->staffService->addEmployee($request);

        return redirect()->route('list-employee')->with('successfully', 'Thêm mới thành công');
    }

    public function edit($id)
    {
        $employee = Staff::find($id);

        return view('pages-spa.edit-employee', compact('employee'));
    }

    public function update(CreateEmployeeRequest $request, $id)
    {
        $this->staffService->updateEmployee($id, $request);

        return redirect()->route('list-employee')->with('success', 'Sửa thành công nhân viên');
    }

    public function delete($id)
    {
        $this->staffService->deleteEmployee($id);

        return redirect()->route('list-employee')->with('success', 'Xóa thành công');

    }
}
