<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Interfaces\StaffInterface;

class StaffController extends Controller
{
    public function __construct(StaffInterface $staffService)
    {
        $this->staffService = $staffService;
    }

    public function listEmployee()
    {
        return view('pages-spa.list-employee');
    }

    public function addEmployee()
    {
        return view('pages-spa.add-employee');
    }

    public function createEmployee(Request $request)
    {
        $this->staffService->addEmployee($request);
    }
}
